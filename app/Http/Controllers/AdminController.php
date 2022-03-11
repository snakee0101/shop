<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Discount;
use App\Models\Order;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Question;
use App\Models\Reply;
use App\Models\Report;
use App\Models\Review;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function products()
    {
        return view('admin.products.index', [
            'products' => Product::withTrashed()->get()
        ]);
    }

    public function create_product()
    {
        return view('admin.products.create', [
            'categories' => Category::all()
        ]);
    }

    public function destroy_product(Product $product)
    {
        $product->delete();

        return back();
    }

    public function edit_product(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    public function restore_product($product_id)
    {
        $product = Product::withTrashed()->find($product_id);
        $product->restore();

        return back();
    }

    public function list_users()
    {
        return view('admin.users.index', [
            'users' => User::all()
        ]);
    }

    public function show_user(User $user)
    {
        return view('admin.users.show', [
            'user' => $user,
            'orders' => Order::where('user_id', $user->id)->get(),
            'wishlisted_products' => $user->wishlists->flatMap(fn($wishlist) => $wishlist->products)
                                                     ->unique(),
            'reports' => Report::where('user_id', $user->id)->get(),
            'visited_products' => $user->visited_products()
                                       ->orderByDesc('pivot_created_at')->get(),
            'comparison' => $user->comparison->groupBy(function($product) {
                                return $product->category_id;
                            }),
            'reviews' => Review::where('user_id', $user->id)->get(),
            'review_replies' => Reply::where([
                'object_type' => Review::class,
                'user_id' => $user->id
            ])->get(),
            'questions' => Question::where('user_id', $user->id)->get(),
            'question_replies' => Reply::where([
                'object_type' => Question::class,
                'user_id' => $user->id
            ])->get(),
            'votes' => Vote::where('user_id' , $user->id)->get(),
        ]);
    }

    public function categories_index()
    {
        return view('admin.categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function create_category()
    {
        return view('admin.categories.create', [
            'categories' => Category::all()
        ]);
    }

    public function characteristics_index()
    {
        return view('admin.characteristics.index', [
            'characteristics' => Characteristic::all()
        ]);
    }

    public function create_characteristics()
    {
        return view('admin.characteristics.create', [
            'categories' => Category::all()
        ]);
    }

    public function create_product_sets()
    {
        return view('admin.product_sets.create');
    }

    public function reports()
    {
        return view('admin.reports.index', [
            'reports' => Report::all()
        ]);
    }

    public function statistics()
    {
        return view('admin.statistics');
    }

    public function store_product(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'price' => 'numeric',
            'payment_info' => 'required',
            'guarantee_info' => 'required',
            'category_id' => 'exists:categories,id',
            'in_stock' => "in:" . Product::STATUS_IN_STOCK . ',' . Product::STATUS_ENDS . ',' . Product::STATUS_OUT_OF_STOCK
        ]);

        //Save basic data
        $product = Product::create(
            $request->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') +
            ['category_id' => $request->category_id]
        );

        //Apply discount
        if ($request->discount_applied === 'on')
            Discount::attachTo($product, $request);

        //save videos
        foreach ($request->all() as $key => $encoded_video) {
            if (!str_contains($key, 'video'))  //filter through video fields only
                continue;

            $video_object = json_decode($encoded_video);
            $product->videos()->create((array)$video_object);
        }

        //Decode and save images
        foreach($request->all() as $key => $encoded_image) {
            if(str_contains($key, 'image'))  //filter through image fields only
                Photo::store($encoded_image, $product);
        }

        //Attach characteristics
        foreach($request->all() as $key => $char_value) {
            if(!str_contains($key, 'char-'))  //filter through characteristic fields only
                continue;

            $char_id = Str::of($key)->after('-');
            $product->characteristics()->attach($char_id, [
                'value' => $char_value
            ]);
        }

        session()->flash('message', 'Product was successfully created');
        return back();
    }

    public function update_product(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'numeric',
            'payment_info' => 'required',
            'guarantee_info' => 'required',
            'category_id' => 'exists:categories,id',
            'in_stock' => "in:" . Product::STATUS_IN_STOCK . ',' . Product::STATUS_ENDS . ',' . Product::STATUS_OUT_OF_STOCK
        ]);

        //Update basic data
        $product->update(
            $request->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') +
            ['category_id' => $request->category_id]
        );

        //Apply discount
        $product->discount()->delete(); //delete old discount

        if ($request->discount_applied === 'on')
            Discount::attachTo($product, $request);

        //Attach characteristics
        $product->characteristics()->detach(); //delete all old characteristics

        foreach($request->all() as $key => $char_value) {
            if(!str_contains($key, 'char-'))  //filter through characteristic fields only
                continue;

            $char_id = Str::of($key)->after('-');
            $product->characteristics()->attach($char_id, [
                'value' => $char_value
            ]);
        }

        //save videos
        $product->videos()->delete(); //delete all old videos

        foreach ($request->all() as $key => $encoded_video) {
            if (!str_contains($key, 'video'))  //filter through video fields only
                continue;

            $video_object = json_decode($encoded_video);
            $product->videos()->create((array)$video_object);
        }

        //Decode and save images
        $product->photos->each->delete(); //Delete all old images

        foreach($request->all() as $key => $encoded_image) {
            if(str_contains($key, 'image'))  //filter through image fields only
                Photo::store($encoded_image, $product);
        }

        return back();
    }
}
