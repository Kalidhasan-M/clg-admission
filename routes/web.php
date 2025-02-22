<?php

use Illuminate\Support\Facades\Route;
use App\Models\About;
use App\Models\Home;
use App\Models\Department;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EnquiryController;

Route::get('/admission-form', function () {
    return view('admission-form');
})->name('admission.form');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/enquiry', function () {
    return view('enquiry');
});

Route::post('/admission-submit', [AdmissionController::class, 'store'])->name('admission.submit');
Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');
Route::get('/', function () {
    $home = Home::first();
    $homeData = Home::all();
    return view('Home', compact('home', 'homeData'));
});

Route::get('/department', function () {
    $departments = Department::all();
    return view('Department', compact('departments'));
});

Route::get('/about', function () {
    $terms = About::all();
    $images = About::first();
    $slider = $images ? $images->image : null;
    return view('about', compact('terms', 'slider'));
});

Route::get('/departments/applyform/{id}', [DepartmentController::class, 'show']);
Route::post('/save-form', [DepartmentController::class, 'saveForm'])->name('save.form');
