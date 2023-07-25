<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\infoController;
use App\Models\information;

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
    return view('index');
});

Route::get('/contact', [ContactController::class, 'showContact']);
Route::post('/contact', [ContactController::class, 'sendEmail']);

Route::get('/login', [CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class, 'registration'])->middleware('alreadyLoggedIn');

Route::post('/registeruser', [CustomAuthController::class, 'registerUser'])->name('registeruser');
Route::post('/loginuser', [CustomAuthController::class, 'loginUser'])->name('loginuser');

Route::get('/profile', [CustomAuthController::class, 'profileDashboard'])->middleware('isLoggedIn');
Route::get('/logout', [CustomAuthController::class, 'logout']);


Route::resource('/userprofile', infoController::class);
Route::get('/', [UserController::class, 'showUserinfo']);
Route::get('layouts.explore', [UserController::class, 'showUser']);

Route::get('/search',[UserController::class, 'searchUser']);