<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage', ['title' => 'Home']) ;
})->name("homepage");

Route::get('/home', function () {
    return redirect()->route("homepage") ;
});

Route::get("/menu", function() {
    return view('menupage', ['title' => 'Menu']);
})->name("menupage");

Route::get("/pesanan", function() {
    return view('orderpage', ['title' => 'Pesanan']);
})->name("orderpage");

Route::get("/profile", function() {
    return view('profilepage', ['title' => 'Profile']);
})->name("profilepage");
