<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');

Route::post('/profiles/store', [ProfileController::class, 'store'])->name('profiles.store');

Route::get('/profiles/index', [ProfileController::class, 'index'])->name('profiles.index');

