<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    function index () {
        return view('index');
    }
    function createpost(){
        return view("User.createpost");
    }
    function userprofile(){
        return view("User.userprofile");
    }
    function contactus(){
        return view("User.contactus");
    }
    function post(){
        return redirect()->route("home")->with("message","Added post");
    }
}
