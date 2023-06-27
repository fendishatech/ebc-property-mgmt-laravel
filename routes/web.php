<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StoreItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::get('/home', [HomeController::class, 'index']);

Route::post('/login', [UserController::class, "login"]);
Route::get('/profile_setting', function () {
    return view("change_password");
});

Route::post('/profile_setting', [UserController::class, "changePassword"]);

Route::resource('/items_store', StoreItemController::class);
Route::resource('/items', ItemController::class);
Route::resource('/users', UsersController::class);
