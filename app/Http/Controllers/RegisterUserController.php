<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Auth;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:7', 'confirmed'],
        ]);

        $user = User::create($attributes);
        Auth::login($user);
        return redirect('/');
    }
}
