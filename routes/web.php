<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('home');
// });

// home
Route::get('/',[HomeController::class, 'index'])->name('/');



// auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/store', [AuthController::class, 'store'])->name('store');
Route::post('/loginuser', [AuthController::class, 'loginUser'])->name('loginuser');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

