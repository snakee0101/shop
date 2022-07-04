<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.advertisements.create', [
            'categories' => Category::all(),
            'products' => Product::all(),
        ]);
    }

    public function store(Request $request)
    {
        $ad = Advertisement::create(
            $request->only(['caption', 'description', 'start_date', 'end_date', 'category_id']) + [
                'image_url_square' => $request->file('image_square')
                                              ->store('/public/images'),
                'image_url_rectangle' => $request->file('image_rectangle')
                                                  ->store('/public/images'),
            ]);

        $ad->products()->attach( $request->products );

        return back();
    }

    public function show(Advertisement $advertisement)
    {
        //
    }

    public function edit(Advertisement $advertisement)
    {
        return view('admin.advertisements.edit', [
            'ad' => $advertisement,
            'categories' => Category::all(),
            'products' => Product::all(),
        ]);
    }

    public function update(Request $request, Advertisement $advertisement)
    {
        $advertisement->update( $request->only( ['caption', 'description', 'start_date', 'end_date', 'category_id'] ) );
        $advertisement->products()->sync( $request->products );

        return back();
    }

    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();

        return back();
    }
}
