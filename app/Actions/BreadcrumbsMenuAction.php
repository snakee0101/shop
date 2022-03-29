<?php

namespace App\Actions;

use App\Models\Category;

class BreadcrumbsMenuAction
{
    public function execute(Category $category) :array
    {
        $categories_list_reversed = [$category]; //category 3 > category 2 > category 1

        while($category->parent_id != null)
            $categories_list_reversed[] = $category = $category->parentCategory; //recursively search for categories

        return array_reverse($categories_list_reversed); //category 1 > category 2 > category 3
    }
}
