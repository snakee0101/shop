<?php

namespace Tests\Unit;

use App\Discounts\FixedPriceDiscount;
use App\Discounts\PercentDiscount;
use App\Models\Discount;
use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DiscountTest extends TestCase
{
    public function test_product_has_a_discount()
    {
        $product = $this->create_discount_for(Product::class);

        $this->assertInstanceOf(Discount::class, $product->fresh()->discount);
    }

    private function create_discount_for($model_class)
    {
        Discount::factory()->withObject(
            $model = $model_class::factory()->create()
        )->create(['discount_classname' => FixedPriceDiscount::class]);

        return $model;
    }

    public function test_product_set_has_a_discount()
    {
        $product_set = $this->create_discount_for(ProductSet::class);

        $this->assertInstanceOf(Discount::class, $product_set->fresh()->discount);
    }

    public function test_discount_retrieves_an_object_it_is_associated_with()
    {
        $this->create_discount_for(Product::class);

        $this->assertInstanceOf(Product::class, Discount::first()->item);
    }

    public function test_fixed_price_discount_calculates_price()
    {
        $this->assertEquals(175, (new FixedPriceDiscount)->calculatePrice(200, 25));
    }

    public function test_percent_discount_calculates_price()
    {
        $this->assertEquals(150, (new PercentDiscount)->calculatePrice(200, 25));
    }

    public function test_discount_could_be_applied_to_a_current_item()
    {
        $product = $this->create_discount_for(Product::class);

        $priceWithDiscount = $product->price - $product->discount->value;
        $this->assertEquals($priceWithDiscount, $product->discount->apply());
    }

    public function test_if_discount_is_present_product_price_is_returned_with_discount()
    {
        $product = $this->create_discount_for(Product::class);

        $priceWithDiscount = $product->price - $product->discount->value;
        $this->assertEquals($priceWithDiscount, $product->priceWithDiscount);
    }

    public function test_product_set_can_return_price_without_all_products_discounts()
    {
        $product1 = $this->create_discount_for(Product::class);
        $product2 = Product::factory()->create();

        $product_set = ProductSet::factory()->create();

        $this->attach_product_to_product_set($product1, $product_set);
        $this->attach_product_to_product_set($product2, $product_set);

        $this->assertEquals($product1->priceWithoutDiscount + $product2->priceWithoutDiscount,
            $product_set->priceWithoutDiscount);
    }

    private function attach_product_to_product_set($product, $product_set)
    {
        DB::table('product_set_product')->insert([
            'product_set_id' => $product_set->id,
            'product_id' => $product->id
        ]);
    }

    public function test_product_set_can_return_price_with_its_own_discount()
    {
        [$product1, $product2] = Product::factory()->count(2)->create();

        $product_set = $this->create_discount_for(ProductSet::class);

        Discount::factory()->withObject($product1)->create(); //this discount must be ignored!

        $this->attach_product_to_product_set($product1, $product_set);
        $this->attach_product_to_product_set($product2, $product_set);

        $withDiscount = (new FixedPriceDiscount)->calculatePrice($product1->price + $product2->price,
            $product_set->discount->value);

        $this->assertEquals($withDiscount, $product_set->priceWithDiscount);
    }

    public function test_if_there_is_no_product_set_discount_individual_product_discounts_are_applied()
    {
        [$product1, $product2] = Product::factory()->count(2)->create();

        $product_set = ProductSet::factory()->create();
        Discount::factory()->withObject($product1)->create();

        $this->attach_product_to_product_set($product1, $product_set);
        $this->attach_product_to_product_set($product2, $product_set);

        $this->assertEquals($product1->priceWithDiscount + $product2->priceWithDiscount,
            $product_set->price);
    }

    public function test_discount_can_check_whether_it_is_expired_or_active()
    {
        $product = Product::factory()->create();
        $discount = Discount::factory()->withObject($product)
            ->withExpirationDate(now(), now()->addDay())->create();

        $this->travel(5)->hours();
        $this->assertFalse($discount->isExpired());
        $this->assertTrue($discount->isActive());

        $this->travel(20)->hours();
        $this->assertTrue($discount->isExpired());
        $this->assertFalse($discount->isActive());
    }

    public function test_inactive_discount_returns_regular_item_price()
    {
        $product = Product::factory()->create();
        $discount = Discount::factory()->withObject($product)
            ->withExpirationDate(now(), now()->addDay())->create();

        $this->travel(5)->hours(); //discount is still active

        $discounted_price = $discount->fresh()->apply();

        $this->assertTrue($discounted_price < $product->price);

        $this->travel(20)->hours(); //discount is inactive
        $this->assertEquals($product->price, $discount->refresh()->apply());
    }

    public function test_expiration_date_is_ignored_if_it_is_not_set()
    {
        $discount = Discount::factory()->withObject(
            Product::factory()->create()
        )->create();

        $this->assertFalse($discount->isExpired());
    }

    public function test_when_coupon_is_applied_it_is_stored_into_a_session()
    {
        Discount::applyCoupon('ABCD');
        $this->assertEquals('ABCD', session('coupon_code'));
    }

    public function test_when_coupon_code_is_invalid_it_throws_validation_error()
    {
        Discount::factory()->withObject(Product::factory()->create())
            ->withCouponCode('ABCD')->create();

        $this->post(route('coupon.store'), [
            'code' => 'A'
        ])->assertSessionHasErrors();
    }

    public function test_coupon_code_could_be_applied_within_controller()
    {
        $discount = Discount::factory()->withObject(Product::factory()->create())
            ->withCouponCode('ABCD')
            ->create();

        $this->post(route('coupon.store'), [
            'code' => 'ABCD'
        ])->assertRedirect()
            ->assertSessionHas('coupon_code', 'ABCD');
    }

    public function test_coupon_code_is_considered_applied_if_it_doesnt_exist()
    {
        $discount = Discount::factory()->withObject( Product::factory()->create() )
                                       ->create();

        $this->assertTrue($discount->isCouponCodeApplied());
    }

    public function test_if_coupon_exists_then_it_is_applied_if_its_code_is_stored_into_session()
    {
        $discount = Discount::factory()->withObject( Product::factory()->create() )
                                       ->withCouponCode('ABCD')
                                       ->create();

        $this->assertFalse($discount->isCouponCodeApplied());

        Discount::applyCoupon('ABCD');
        $this->assertTrue($discount->isCouponCodeApplied());
    }

    public function test_if_discount_has_a_coupon_and_its_not_applied_discount_is_not_active()
    {
        $discount = Discount::factory()->withObject( Product::factory()->create() )
                                       ->withCouponCode('ABCD')
                                       ->create();

        $this->assertFalse($discount->isActive());

        Discount::applyCoupon('ABCD');
        $this->assertTrue($discount->isActive());
    }
}
