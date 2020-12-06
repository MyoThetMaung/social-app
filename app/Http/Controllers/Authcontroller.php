<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Authcontroller extends Controller
{
    function login(){
        return view('Auth.login');
    }
    function register(){ 
        return view('Auth.register');
    }
    function post_register(){
        $validation = request()->validate([
            "username"  => "required",
            "email"     => "required",
            "password"  => "required||min:8",
            "image"      => "required"
        ]);
        if($validation){
            // move our image file to public
           $image = request('image');
           $image_name = uniqid()."_". $image->getClientOriginalName();
           $image->move(public_path("images/profiles"), $image_name);

        //    save user data to Database
           $password = $validation['password'];
           $user = new User();
           $user->name = $validation['username'];
           $user->email = $validation['email'];
           $user->password = Hash::make ($password);
           $user->image = $image_name;
           $user-> save();
           return redirect()->route("home");
        }
        else{
            return back()->withErrors($validation);
        }
    }
}
