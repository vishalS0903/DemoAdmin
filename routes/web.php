<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/permissions',[PermissionController::class,'index'])->name('permission.index');
    Route::get('/permission/create',[PermissionController::class,'create'])->name('permission.create');
    Route::post('/permission/store',[PermissionController::class,'store'])->name('permission.store');
    Route::get('/permission/edit/{id}',[PermissionController::class,'edit'])->name('permission.edit');
    Route::post('/permission/update/{id}',[PermissionController::class,'update'])->name('permission.update');


      // Our resource routes
      Route::resource('roles', RoleController::class);
      Route::resource('users', UserController::class);
      Route::resource('products', ProductController::class);




});

require __DIR__.'/auth.php';
