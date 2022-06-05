<?php

namespace App\Http\Controllers;

use App\Models\BadgeStyle;
use Illuminate\Http\Request;

class BadgeStyleController extends Controller
{
    public function index()
    {
        return view('admin.badge_styles.index', [
            'badge_styles' => BadgeStyle::all()
        ]);
    }

    public function create()
    {
        return view('admin.badge_styles.create');
    }

    public function store(Request $request)
    {
        BadgeStyle::create( $request->only(['text_color', 'background_color']) );

        return back();
    }

    public function show(BadgeStyle $badgeStyle)
    {

    }

    public function edit(BadgeStyle $badgeStyle)
    {

    }

    public function update(Request $request, BadgeStyle $badgeStyle)
    {

    }

    public function destroy(BadgeStyle $badgeStyle)
    {

    }
}
