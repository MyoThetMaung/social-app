<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    function admin(){
        return view('Admin.admin');
    }
    function manage_premium_user(){
        return view('Admin.manage_premium_user');
    }
    function contact_message(){
        return view('Admin.contact_message');
    }
}
