<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
// Tattoos page
Route::get('/tattoos', function () {
    return view('tattoos');
});

// Clothes page
Route::get('/clothes', function () {
    return view('clothes');
});
