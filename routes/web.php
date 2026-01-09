<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/login', [LoginController::class, 'index'])->name('site.login'); //login
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login'); //login
Route::get('/cadastro', [RegisterController::class, 'index'])->name('site.register'); //cadastro
Route::post('/cadastro', [RegisterController::class, 'store'])->name('auth.register'); //cadastro

//Protected Routes Auth
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard'); //dashboard
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout'); //logout

    //habits
    Route::get('/dashboard/habits/create', [HabitController::class, 'create'])->name('habit.create');
    Route::post('/dashboard/habits', [HabitController::class, 'store'])->name('habit.store');
});


