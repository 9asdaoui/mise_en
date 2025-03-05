<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $count=User::get();
        return view('welcome',['count'=>count($count)]);
    }    
    public function getCount(){
        $count=User::get();
        echo count($count);
    }
    

}
