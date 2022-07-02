<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('catalog', [
            'categories' => Category::topLevelCategories()->withCount('products')->get(),
            'ads' => Advertisement::latest('start_date')
                                ->uncategorized()
                                ->notExpired()
                                ->limit(10)
                                ->get()
        ]);
    }

    public function create()
    {
        return view('admin.categories.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image'
        ]);

        $path = $request->file('image')
            ->store('/public/images/');

        Category::create($request->only(['name', 'parent_id']) + [
                'image_url' => Storage::url($path)
            ]);

        session()->flash('message', 'Category was successfully created');
        return back();
    }

    public function show(Category $category)
    {
        $ads = Advertisement::where('category_id', $category->id)
                            ->notExpired()
                            ->limit(10)
                            ->get();

        if ($category->hasSubCategories()) {//if category has subcategories - show their list
            return view('catalog', [
                'categories' => $category->subCategories,
                'is_subcategories_page' => true,
                'ads' => $ads
            ]);
        }

        return view('shop', [ //if not - go to the shop
            'category' => $category,
            'products' => $category->products()
                                   ->withAvg('reviews', 'rating')
                                   ->paginate(),
            'ads' => $ads
        ]);
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

        if ($request->file('image'))
            $path = $request->file('image')
                ->store('/public/images/');

        $category->update($request->only(['name', 'parent_id']) + [
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
