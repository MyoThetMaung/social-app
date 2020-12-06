<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\Admincontroller;

// HomePage 
Route::get('/',[Pagecontroller::class,"index"])->name("home");


// User
Route::get('/createpost',[Pagecontroller::class,"createpost"])->name("createpost");
Route::post('/createpost',[Pagecontroller::class,"post"])->name("post");
Route::get('/userprofile',[Pagecontroller::class,"userprofile"])->name("userprofile");
Route::get('/contactus',[Pagecontroller::class,"contactus"])->name("contactus");

// Admin
Route::get('/admin',[Admincontroller::class,"admin"])->name("admin");
Route::get('/admin/manage_premium_user',[Admincontroller::class,"manage_premium_user"])->name("manage_premium_user");
Route::get('/admin/contact_message',[Admincontroller::class,"contact_message"])->name("contact_message");



// Authentication
Route::get('/login',[Authcontroller::class,"login"])->name("login");
Route::get('/register',[Authcontroller::class,"register"])->name("register");
Route::post('/register',[Authcontroller::class,"post_register"])->name("post_register");


