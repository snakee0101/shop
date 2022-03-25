<?php

namespace Tests\Unit;

use App\Models\Characteristic;
use App\Models\Product;
use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    public function test_category_has_a_parent_category()
    {
        $subcategory = Category::factory()->create([
            'parent_id' => $category = Category::factory()->create()
        ]);

        $this->assertInstanceOf(Category::class, $subcategory->parentCategory);
        $this->assertEquals($category->id, $subcategory->parentCategory->id);
    }

    public function test_category_could_have_subcategories()
    {
        $category = Category::factory()->create();
        Category::factory()->count(2)->create(['parent_id' => $category->id]); //create subcategories

        $this->assertEquals(2, $category->subcategories()->count());
        $this->assertInstanceOf(Category::class, $category->subCategories()->first());
    }

    public function test_category_could_check_whether_it_has_subcategories()
    {
        Category::factory()->create([ 'parent_id' => $category = Category::factory()->create() ]);

        $this->assertTrue($category->hasSubCategories());

        $this->assertFalse(Category::factory()->make()->hasSubCategories());
    }

    public function test_a_product_belongs_to_one_category()
    {
        $this->assertInstanceOf(Category::class, Product::factory()->make()->category);
    }

    public function test_a_category_has_many_products()
    {
        $category = Category::factory()->has(Product::factory()->count(2))
                                       ->create();

        $this->assertCount(2, $category->products);
        $this->assertInstanceOf(Product::class, $category->products[0]);
    }

    public function test_top_level_categories_list_could_be_retrieved()
    {
        Category::factory()->withParent( $top_level_category = Category::factory()->create() )
                           ->create();

        $this->assertEquals( Category::topLevelCategories()->first()->id, $top_level_category->id );
    }

    public function test_when_category_is_deleted_all_products_are_detached()
    {
        $product = Product::factory()->create([
            'category_id' => $category = Category::factory()->create()
        ]);

        $category->delete();
        $this->assertNull( $product->fresh()->category_id );
    }

    public function test_when_category_is_deleted_all_characteristics_are_deleted()
    {
        Characteristic::factory()->create([
            'category_id' => $category = Category::factory()->create()
        ]);

        $this->assertDatabaseCount('characteristics', 1);

        $category->delete();

        $this->assertDatabaseCount('characteristics', 0);
    }
}
