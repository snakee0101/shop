<?php

namespace Tests\Unit;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AdvertisementTest extends TestCase
{
    public function test_start_date_and_end_date_are_carbon_instances()
    {
        Advertisement::factory()->create();

        $ad = Advertisement::first();

        $this->assertInstanceOf(Carbon::class, $ad->start_date);
        $this->assertInstanceOf(Carbon::class, $ad->end_date);
    }

    public function test_advertisement_belongs_to_category()
    {
        $ad = Advertisement::factory()->create();
        $this->assertNull($ad->category()->first());

        $ad_2 = Advertisement::factory()->withCategory( Category::factory()->create() )
                                        ->create();
        $this->assertInstanceOf(Category::class, $ad_2->category()->first());
    }

    public function test_category_has_many_advertisements()
    {
        $ads = Advertisement::factory()
                            ->withCategory( $category = Category::factory()->create() )
                            ->count(2)
                            ->create();

        $this->assertInstanceOf(Advertisement::class, $category->advertisements()->first() );
        $this->assertCount(2, $category->advertisements );
    }

    public function test_advertisement_has_products()
    {
        $ad = Advertisement::factory()->create();
        $pr_1 = Product::factory()->create();
        $pr_2 = Product::factory()->create();

        DB::table('advertisement_product')->insert([[
            'advertisement_id' => $ad->id,
            'product_id' => $pr_1->id,
        ], [
            'advertisement_id' => $ad->id,
            'product_id' => $pr_2->id,
        ]]);

        $this->assertInstanceOf(Product::class, $ad->products()->first());
        $this->assertCount(2, $ad->products);
    }
}
