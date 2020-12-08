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
    return view('Base/index');
});

Route::get('/Stock', function () {
    return view('Content/Stock');
});

Route::get('/Progress', function () {
    return view('Content/Progress');
});

Route::get('/About', function () {
    return view('Base/about');
});

Route::get('Contact', function () {
    return view('Base/contact');
});