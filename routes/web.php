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
    return view('Official-Content/Stock');
});
Route::get('/Stock/wood', function () {
    return view('Official-Content/wood');
});
Route::get('/Stock/plastic', function () {
    return view('Official-Content/plastic');
});
Route::get('/Stock/concrete', function () {
    return view('Official-Content/concrete');
});
Route::get('/Stock/metal', function () {
    return view('Official-Content/metal');
});
Route::get('/Stock/others', function () {
    return view('Official-Content/others');
});

Route::get('/Progress', function () {
    return view('Content/Progress');
});

Route::get('/Dashboard', function () {
    return view('Content/Dashboard');
});


Route::get('/About', function () {
    return view('Base/about');
});

Route::get('Contact', function () {
    return view('Base/contact');
});
