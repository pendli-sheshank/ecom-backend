<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function register(Request $req)     //method for register new users
    {
        $user = new User;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=Hash::make($req->input('password'));
        $user->save();
        return $user;

        
      
    }

    function login(Request $req)
    {
      
        $user= User::where('email',$req->email)->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return ['error'=>'Email or Password Incorrect'];
        }
       
        return $user;
    }
}
