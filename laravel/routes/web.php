<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AdminController;



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
Route::get('/index', function () {
    return redirect()->to('/');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/verify/{user}/{tmp}', [RegisterController::class, 'verify']);

Route::get('/verify/{user}/{tmp}/{email}', [EmailController::class, 'verify']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/adminview', [AdminController::class, 'index']);

Route::get('/accessviolation/{codigo}/{user}',[EmailController::class, 'accessViolation']);

