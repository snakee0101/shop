<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\News;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create(request(['first_name', 'last_name', 'phone', 'email']) + [
            'password' => $request->password,
            'comparison_access_token' => Str::uuid()
        ]);

        auth()->login($user);

        Wishlist::createDefault($user);

        return redirect()->route('account');
    }

    public function login(LoginRequest $request)
    {
        auth()->login(
            User::firstWhere('email', $request->login_email)
        );

        return redirect()->route('account');
    }

    public function favorite_news()
    {
        return view('account', [
            'news' => News::whereHas('liked_users', function ($q) {
                $q->where('users.id', auth()->id());
            })->latest()->paginate()
        ]);
    }
}
