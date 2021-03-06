<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Discount;
use App\Models\News;
use App\Models\Order;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Question;
use App\Models\Reply;
use App\Models\Report;
use App\Models\Review;
use App\Models\User;
use App\Models\Video;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Builder;
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

    public function news()
    {
        return view('admin.news.index', [
            'news' => News::all()
        ]);
    }

    public function restore_product($product_id)
    {
        Product::withTrashed()->find($product_id)
                              ->restore();

        return back();
    }

    public function list_users()
    {
        return view('admin.users.index', [
            'users' => User::paginate()
        ]);
    }

    public function list_advertisements()
    {
        return view('admin.advertisements.index', [
            'advertisements' => Advertisement::all()
        ]);
    }

    public function show_user(User $user)
    {
        return view('admin.users.show', [
            'user' => $user,
            'wishlisted_products' => $user->wishlists->flatMap(fn($wishlist) => $wishlist->products)
                                                     ->unique(),
            'comparison' => $user->comparison->groupBy(function($product) {
                                return $product->category_id;
                            }),
            'replies' => $user->replies()->paginate(),
            'videos' => $user->videos,
            'photos' => $user->photos()
                             ->where('object_type', '!=', Product::class)
                             ->get()
        ]);
    }

    public function categories_index()
    {
        return view('admin.categories.index', [
            'categories' => Category::paginate()
        ]);
    }

    public function statistics()
    {
        return view('admin.statistics');
    }
}
