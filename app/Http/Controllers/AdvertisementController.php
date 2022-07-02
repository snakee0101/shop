<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
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
        //
    }

    public function show(Advertisement $advertisement)
    {
        //
    }

    public function edit(Advertisement $advertisement)
    {
        //
    }

    public function update(Request $request, Advertisement $advertisement)
    {
        //
    }

    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();

        return back();
    }
}
