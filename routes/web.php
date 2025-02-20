<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
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
    Route::get('subscriber/message',[AdminController::class,'subscriberMessage'])->name('subscriber.message');

    //-------News pages------//
    Route::get('/add/news/',[NewsController::class,'addNews'])->name('add.news');
    Route::Post('/store',[NewsController::class,'store'])->name('store');
    Route::get('/edit/news/{id}',[NewsController::class,'edit'])->name('news.edit');
    Route::post('/update/news/{id}', [NewsController::class,'newsupdate'])->name('news.update');
    Route::get('/show/news/',[NewsController::class,'showNews'])->name('show.news');
   
   

    //Protect pages//
    Route::get('/admin/protect',[AdminController::class,'addProtect'])->name('admin.protect');
    Route::post('/admin/protect/store',[AdminController::class,'addProtectStore'])->name('admin.protect.store');
    Route::get('/edit/protect/{id}',[AdminController::class,'editProtect'])->name('admin.edit.protect');
    Route::post('/update/protect/{id}',[AdminController::class,'updateprotect'])->name('admin.protect.update');
    Route::get('/show/protec',[AdminController::class,'ShowProtec'])->name('show.protect');
   
    //---------------about------------//
    Route::get('/admin/about',[AboutController::class,'addAbout'])->name('admin.about');
    Route::post('/admin/about/store',[AboutController::class,'storeAbout'])->name('admin.about.store');
    Route::get('/admin/show/about',[AboutController::class,'showAbout'])->name('admin.show.about');
    Route::get('/admin/about/edit/{id}',[AboutController::class,'editAbout'])->name('admin.about.edit');
    Route::post('/admin/about/update/{id}',[AboutController::class,'updateAbout'])->name('admin.about.update');

});