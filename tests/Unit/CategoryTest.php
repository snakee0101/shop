<?php

namespace Tests\Unit;

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
}
