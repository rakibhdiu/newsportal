<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AdminController::class,'home'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/news',[AdminController::class,'news'])->name('news');
Route::middleware(['auth','user'])->group(function(){
    Route::get('/dashboard',[AdminController::class,'userdashboard'])->name('dashboard');
    Route::post('/userstore',[AdminController::class,'userStore'])->name('subscription');
});

Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'admin'])->name('admin.dashboard');
    Route::Post('/store',[AdminController::class,'store'])->name('store');
    Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
    Route::post('/update/{id}',[AdminController::class,'update'])->name('update');
});