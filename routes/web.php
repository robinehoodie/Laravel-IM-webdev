<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/Stock', [StockController::class, 'index'])->name('Stock');
    Route::get('/Stock/wood', [StockController::class, 'wood'])->name('Stock/wood');
    Route::get('/Stock/plastic', [StockController::class, 'plastic'])->name('Stock/plastic');
    Route::get('/Stock/concrete', [StockController::class, 'concrete'])->name('Stock/concrete');
    Route::get('/Stock/metal', [StockController::class, 'metal'])->name('Stock/metal');
    Route::get('/Stock/others', [StockController::class, 'others'])->name('Stock/others');
});

Route::get('/login', function () {
    return view('Base/index-login', ['login' => true]);
})->name('login');

Route::get('/', function () {
    return view('Base/index');
})->name('index');


// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/Progress', function () {
    return view('Official-Content/Progress');
});

Route::get('/Dashboard', function () {
    return view('Official-Content/Dashboard');
});

Route::get('/Resupply', function () {
    return view('Official-Content/Resupply');
});


Route::get('/About', function () {
    return view('Base/about');
});

Route::get('Contact', function () {
    return view('Base/contact');
});