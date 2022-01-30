<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Characteristic;
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
        $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        Characteristic::create( $request->only(['name', 'category_id']) );
    }

    public function show(Characteristic $characteristic)
    {
        //
    }

    public function edit(Characteristic $characteristic)
    {
        //
    }

    public function update(Request $request, Characteristic $characteristic)
    {
        //
    }


    public function destroy(Characteristic $characteristic)
    {
        //
    }
}
