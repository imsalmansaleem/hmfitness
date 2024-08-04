<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/equipment', function () {
    return view('equipment');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/trainers', function () {
    return view('trainers');
});

Route::get('/contact', function () {
    return view('contact');
});
