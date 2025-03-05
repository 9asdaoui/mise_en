<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $validatedDATA = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::create($validatedDATA);

        auth()->login($user);
        return redirect('/prouducts/index');
        
    }

    public function authenticate(Request $request)
    {
        $validatedDATA = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if (auth()->attempt($validatedDATA)) {
            return redirect('/prouducts/index');
        }

        return back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
