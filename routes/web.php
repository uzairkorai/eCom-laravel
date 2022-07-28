<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('login');
});

// Route::get('/product',[ProductController::class, 'index']);
Route::post("/login",[UserController::class, 'login']);
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);
Route::get("detail/{id}",[ProductController::class, 'detail']);