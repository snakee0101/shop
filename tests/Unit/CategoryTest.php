<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    public function test_category_has_a_parent_category()
    {
        $category = Category::factory()->create();
        $subcategories = Category::factory()->count(3)->create(['parent_id' => $category->id]);

        $this->assertInstanceOf(Category::class, $subcategories[0]->fresh()->parentCategory);
        $this->assertEquals($category->id, $subcategories[0]->fresh()->parentCategory->id);
    }

    public function test_category_could_have_subcategories()
    {
        $category = Category::factory()->create();
        $subcategories = Category::factory()->count(3)->create(['parent_id' => $category->id]);

        $this->assertCount(3, $category->subcategories);
        $this->assertInstanceOf(Category::class, $category->subCategories()->first());
    }

    public function test_category_could_check_whether_it_has_subcategories()
    {
        $category = Category::factory()->create();
        $subcategories = Category::factory()->count(3)->create(['parent_id' => $category->id]);

        $this->assertTrue($category->fresh()->hasSubCategories());

        $category2 = Category::factory()->create();
        $this->assertFalse($category2->hasSubCategories());
    }

    public function test_a_product_belongs_to_one_category()
    {
        $product = Product::factory()->create();
        $this->assertInstanceOf(Category::class, $product->category);
    }

    public function test_a_category_has_many_products()
    {
        $category = Category::factory()->has(Product::factory()->count(3))
                                       ->create();

        $this->assertCount(3, $category->products);
        $this->assertInstanceOf(Product::class, $category->products[0]);
    }

    public function test_top_level_categories_list_could_be_retrieved()
    {
        $top_level_category = Category::factory()->create();
        $category = Category::factory()->withParent($top_level_category)->create();

        $this->assertEquals( Category::topLevelCategories()->get()->first()->id, $top_level_category->id );
    }

    public function test_category_has_a_products_counter()
    {
        $category = Category::factory()->create();
        $product = Product::factory()->count(5)->create([
            'category_id' => $category->id
        ]);

        $this->assertEquals(5, $category->fresh()->products_count);
    }
}
