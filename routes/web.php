<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\HomeController;
use App\Models\Categorie;
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



// evenement
Route::post('/ajouterevent', [EvenementController::class, 'ajouterEvent'])->name('ajouterevent');
Route::delete('/deleteevent/{id}', [EvenementController::class, 'deleteEvent'])->name('deleteevent');
Route::put('/updateevent/{id}', [EvenementController::class, 'updateEvent'])->name('updateevent');



// ----------------admin----------------
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
// categorie
Route::get('/categorie', [AdminController::class, 'getCategorie'])->name('categorie');
Route::post('/ajoutercategorie', [AdminController::class, 'ajouterCategorie'])->name('ajoutercategorie');

Route::put('/updatecategorie/{id}', [AdminController::class, 'updateCategorie'])->name('updatecategorie');

Route::delete('/deletecategorie/{id}', [AdminController::class, 'deleteCategorie'])->name('deletecategorie');




// evenement
Route::get('/event', [AdminController::class, 'getEvenement'])->name('event');
Route::put('/updateetat/{id}', [AdminController::class, 'updateEtat'])->name('updateetat');



// users
Route::get('userslist', [AdminController::class, 'getUsers'])->name('userslist');
Route::put('/updaterole/{id}', [AdminController::class, 'updateRole'])->name('updaterole');






