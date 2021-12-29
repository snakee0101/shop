<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function login()
    {
        $validator = Validator::make(request()->all(), [
            'login_email' => 'required|exists:users,email',
            'login_password' => ['required', new \App\Rules\PasswordHash( request('login_email') )]
        ]);

        if($validator->fails()){
            return redirect()->route('account')
                ->withErrors($validator,'login')
                ->withInput();
        }

        $user = User::firstWhere('email', request('login_email'));
        auth()->login($user);

        return redirect()->route('account');
    }
}
