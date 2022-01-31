<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Characteristic;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CharacteristicController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $provider = $request->validate([
                'name' => 'required',
                'category_id' => 'required|exists:categories,id',
            ]);

            Characteristic::create( $request->only(['name', 'category_id']) );

            session()->flash('message', 'Characteristic is successfully created');
            session()->flash('status', 'OK');

            return back();
        } catch(QueryException) {
            session()->flash('message', 'Characteristic with the given name is already exists in this category');
            session()->flash('status', 'Error');
            return back();
        }
    }

    public function show(Characteristic $characteristic)
    {
        //
    }

    public function edit(Characteristic $characteristic)
    {
        return view('admin.characteristics.edit', [
            'char' => $characteristic,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Characteristic $characteristic)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $characteristic->update( $request->only( ['name', 'category_id'] ) );

        return back();
    }


    public function destroy(Characteristic $characteristic)
    {
        $characteristic->delete();

        return back();
    }
}
