<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UsersController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/users',[UsersController::class,'index'])->name('users.index');
Route::get('/users/create',[UsersController::class,'create'])->name('users.create');
Route::get('/users/{id}',[UsersController::class,'show'])->name('users.show');
Route::post('/users',[UsersController::class,'store'])->name('users.store');
Route::get('/users/{id}/edit',[UsersController::class,'edit'])->name('users.edit');
Route::put('/users/{id}',[UsersController::class,'update'])->name('users.update');


