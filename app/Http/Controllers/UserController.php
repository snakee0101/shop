<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        $user = User::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'phone' => request('phone'),
            'email' => request('email'),
            'password' => request('password')
        ]);

        auth()->login($user);
        return redirect()->route('account');
    }

    public function login()
    {

    }
}
