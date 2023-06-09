<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;
use  App\Http\Controllers;
use App\Http\Controllers\RegisterForm;

// normal routes 

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
//routs from controller  
Route::get('/register', [RegisterForm::class, 'index']);
Route::post('/register', [RegisterForm::class, 'register']);
