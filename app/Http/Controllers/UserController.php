<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register()
    {
        /**
         * Notes on validation
         * - First and last name - contains only letters, starts with capital letter,
         * - Phone - it is a regular expression of valid phone number given in international format, (for example: +380775427430)
         * - Email - it is a valid email,
         * - Password - must be confirmed
         **/
        $validator = Validator::make(request()->all(), [
            'first_name' => 'alpha',
            'last_name' => 'alpha',
            'phone' => 'unique:users,phone|regex:/\+\d{12}/',
            'email' => 'email|unique:users,email',
            'password' => 'confirmed'
        ]);
        if($validator->fails()){
            return redirect()->route('account')
                             ->withErrors($validator,'register')
                             ->withInput();
        }

        $user = User::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'phone' => request('phone'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);

        auth()->login($user);
        return redirect()->route('account');
    }

    public function login()
    {
        $user = User::firstWhere('email', request('email'));
        auth()->login($user);

        return redirect()->route('account');
    }
}
