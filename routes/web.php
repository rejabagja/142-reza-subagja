<?php

use Illuminate\Support\Facades\Route;


// route landing page
Route::get('/', function () {
    return view('landing.index') ;
})->name("landing");


Route::get('customer/dashboard', function() {
    return view('customer.dashboard');
});
Route::get('customer/menu', function() {
    return view('customer.menu');
});

Route::get('/login', function() {
    return view('auth.login', ['title' => 'Login']);
});
Route::get('/register', function() {
    return view('auth.register', ['title' => 'Register']);
});