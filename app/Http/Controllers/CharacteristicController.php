<?php

namespace App\Http\Controllers;

use App\Http\Requests\CharacteristicRequest;
use App\Models\Category;
use App\Models\Characteristic;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CharacteristicController extends Controller
{
    public function forCategory(Category $category)
    {
        return $category->characteristics;
    }

    public function index()
    {
        return view('admin.characteristics.index', [
            'characteristics' => Characteristic::all()
        ]);
    }

    public function create()
    {
        return view('admin.characteristics.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(CharacteristicRequest $request)
    {
        Characteristic::create( $request->only(['name', 'category_id']) );

        return back()->with('successful_message', 'Characteristic is successfully created');
    }

    public function edit(Characteristic $characteristic)
    {
        return view('admin.characteristics.edit', [
            'char' => $characteristic,
            'categories' => Category::all()
        ]);
    }

    public function update(CharacteristicRequest $request, Characteristic $characteristic)
    {
         $characteristic->update( $request->only( ['name', 'category_id'] ) );

         return back()->with('successful_message', 'Characteristic is successfully updated');
    }


    public function destroy(Characteristic $characteristic)
    {
        $characteristic->delete();

        return back();
    }
}
