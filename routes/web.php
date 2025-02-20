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
Route::get('/about',[AdminController::class,'about'])->name('about');
Route::get('/protect',[AdminController::class,'protect'])->name('protect');
Route::get('/doctor',[AdminController::class,'doctor'])->name('doctor');



Route::middleware(['auth','user'])->group(function(){
    Route::get('/dashboard',[AdminController::class,'userdashboard'])->name('dashboard');
    Route::post('/userstore',[AdminController::class,'userStore'])->name('subscription');
});

Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'admin'])->name('admin.dashboard');
    Route::Post('/store',[AdminController::class,'store'])->name('store');
    Route::get('/edit/news/{id}',[AdminController::class,'edit'])->name('news.edit');

    Route::post('/update/news/{id}', [AdminController::class, 'update'])->name('news.update');

    Route::get('/add/news/',[AdminController::class,'addNews'])->name('add.news');
    Route::get('/show/news/',[AdminController::class,'showNews'])->name('show.news');
    Route::get('subscriber/message',[AdminController::class,'subscriberMessage'])->name('subscriber.message');

    //Protect pages//
    Route::get('/admin/protect',[AdminController::class,'addProtect'])->name('admin.protect');
    Route::post('/admin/protect/store',[AdminController::class,'addProtectStore'])->name('admin.protect.store');
    Route::get('/edit/protect/{id}',[AdminController::class,'editProtect'])->name('admin.edit.protect');
    Route::post('/update/protect/{id}',[AdminController::class,'updateprotect'])->name('admin.protect.update');


    Route::get('/show/protec',[AdminController::class,'ShowProtec'])->name('show.protect');
   


});