<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('catalog', [
            'categories' => Category::topLevelCategories()->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image'
        ]);

        $path = $request->file('image')
                        ->store('/public/images/');

        Category::create( $request->only( ['name', 'parent_id'] ) + [
            'image_url' => Storage::url($path)
        ] );

        session()->flash('message', 'Category was successfully created');
        return back();
    }

    public function show(Category $category)
    {
        if($category->hasSubCategories()) {//if category has subcategories - show their list
            return view('catalog', [
                'categories' => $category->subCategories()->get(),
                'is_subcategories_page' => true
            ]);
        } else {//if not - go to the shop
            return view('shop', [
                'category' => $category,
                'products' => $category->products()->paginate()
            ]);
        }
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|nullable'
        ]);

        $path = '';

        if($request->file('image'))
            $path = $request->file('image')
                            ->store('/public/images/');

        $category->update( $request->only( ['name', 'parent_id'] ) + [
                'image_url' => ($path == '') ? $category->image_url : Storage::url($path)  //store an image if it is provided, otherwise leave original image
        ]);

        session()->flash('message', 'Category was successfully updated');
        return back();
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back();
    }
}
