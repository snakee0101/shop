<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' =>  $request->last_name,
            'phone' =>  $request->phone,
            'email' =>  $request->email,
            'password' => Hash::make( $request->password )
        ]);

        auth()->login($user);
        return redirect()->route('account');
    }

    public function login(LoginRequest $request)
    {
        auth()->login(
            User::firstWhere('email', $request->login_email)
        );

        return redirect()->route('account');
    }
}
