<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// General Pages
Route::get('/', [WelcomeController::class, 'index']);
Route::get('home', [UserController::class, 'home'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('aboutPage');
Route::get('pricing', [PricingController::class, 'index'])->name('pricingPage');

// Calculations
Route::get('calculate/{num1}/{num2}', [CalculateController::class, 'index']);

// User Routes (Grouped by Prefix and Controller)
Route::prefix('user')->controller(UserController::class)->group(function () {
    Route::get('{id}/{name}', 'show')->name('userDisplay'); 
    Route::get('edit/{id}/{name}', 'edit'); 
    Route::get('delete', 'remove'); 
});

Route::get('add', [AddUserController::class, 'create'])->name('add');
Route::post('add', [AddUserController::class, 'store'])->name('store');

// Display the form and table
Route::get('post', [PostController::class, 'index'])->name('post.index');

// Handle the form submission (Name this route 'post' as requested)
Route::post('post', [PostController::class, 'store'])->name('post');