<?php

use Illuminate\Support\Facades\Route;
use App\Models\About;

Route::get('/', function () {
    return view('Home');
});
Route::get('/department', function () {
    return view('Department');
});
Route::get('/about', function () {
    $terms = About::all();
    $images = About::first(); 
    $slider = $images ? $images->image : null;
    return view('about', compact('terms', 'slider'));
});

