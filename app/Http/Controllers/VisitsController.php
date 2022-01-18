<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitsController extends Controller
{
    public function show()
    {
        return view('account', [
            'visited_products' => auth()->user()->visited_products()
                                                ->orderByDesc('pivot_created_at')->get()
        ]);
    }
}
