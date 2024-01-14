<?php

namespace App\Http\Controllers;

class NewsSearchFilterController extends Controller
{
    public function clear($filter)
    {
        session()->forget($filter);

        return redirect()->route('news.index');
    }
}
