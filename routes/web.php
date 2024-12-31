<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('Home');
});
Route::get('/department', function () {
    return view('Department');
});
Route::get('/about', function () {
    return view('about');
});

