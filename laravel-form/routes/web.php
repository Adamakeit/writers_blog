<?php

use App\Http\Controllers\Articlecontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/index', [Articlecontroller::class, 'index'])->name('index')->withoutMiddleware(['auth']);
    Route::get('/logout', [usercontroller::class, 'logout'])->name('logout');
    Route::get('/enregistrer/{article}/', [Articlecontroller::class, 'show']);
    Route::get('/edit/{article}/', [Articlecontroller::class, 'edit'])->name('edit');
    Route::put('/update/{article}/', [Articlecontroller::class, 'update'])->name('update');
    Route::delete('/delete/{article}/', [Articlecontroller::class, 'delete']);
    Route::get('/enregistrer', [Articlecontroller::class, 'enregistrer'])->name('enregistrer');
});
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [usercontroller::class, 'register'])->name('register');
    Route::post('/register', [usercontroller::class, 'handleregister'])->name('register');
    Route::get('/login', [usercontroller::class, 'login'])->name('login');
    Route::post('/login', [usercontroller::class, 'handlelogin'])->name('login');
});

Route::post('/enregistrer', [Articlecontroller::class, 'handleenregistrer'])->name('handenregistrer');
