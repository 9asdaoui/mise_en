<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        $role = Role::get();
        // select * from roles
        return view('register',["roles"=>$role]);
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
            'role_id' => 'required',
            'password' => 'required'
        ]);

        $user = User::create($validatedDATA);
        // insert into bla bla bla

        auth()->login($user);
        return redirect('/welcome');
        
    }

    public function authenticate(Request $request)
    {
        $validatedDATA = request()->validate([
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required'
        ]);
        
        if (auth()->attempt($validatedDATA)) {
            return redirect('/welcome');
        }

        return back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
