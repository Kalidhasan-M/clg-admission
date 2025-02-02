<?php

use Illuminate\Support\Facades\Route;
use App\Models\About;
use App\Models\Home;
use App\Models\Department;
use App\Http\Controllers\AdmissionController;

Route::get('/admission-form', function () {
    return view('admission-form');
})->name('admission.form');
Route::post('/admission-submit', [AdmissionController::class, 'store'])->name('admission.submit');
Route::get('/', function () {
    $home = Home::first();
    return view('Home', compact('home'));
});
Route::get('/department', function () {
    $departments = Department::select('name', 'department', 'image')->get();
    return view('Department', compact('departments'));
});
Route::get('/about', function () {
    $terms = About::all();
    $images = About::first(); 
    $slider = $images ? $images->image : null;
    return view('about', compact('terms', 'slider'));
});

