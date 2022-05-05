<?php

use App\Http\Controllers\admin\UserController;
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


Route::get('', [UserController::class,'index'])->name('users.index');

Route::get('users/get-age',[UserController::class,'getAge'])->name('users.age');

Route::get('users/edit-user/{id}',[UserController::class,'editUser'])->name('users.edit');

Route::get('users/add-user',[UserController::class,'addUser'])->name('users.add');

Route::post('users/create-user',[UserController::class,'createUser'])->name('users.create');

Route::put('users/update-user/{id}',[UserController::class,'updateUser'])->name('users.update');

Route::delete('users/delete-user/{id}',[UserController::class,'deleteUser'])->name('users.delete');
