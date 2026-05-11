<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddUserController;

// ==========================================
// STATIC PAGES (Routed through PageController)
// ==========================================
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'welcome');
    Route::get('about', 'about')->name('aboutPage');
    Route::get('pricing', 'pricing')->name('pricingPage');
});

// ==========================================
// MIMIKYU SHADOW BOARD
// ==========================================
Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::post('post', [PostController::class, 'store'])->name('post');

// ==========================================
// BATTLE CALCULATIONS
// ==========================================
Route::get('calculate/{num1}/{num2}', [CalculateController::class, 'index']);

// ==========================================
// USER MANAGEMENT
// ==========================================
Route::get('home', [UserController::class, 'home'])->name('home');

Route::prefix('user')->controller(UserController::class)->group(function () {
    Route::get('{id}/{name}', 'show')->name('userDisplay'); 
    Route::get('edit/{id}/{name}', 'edit'); 
    Route::get('delete', 'remove'); 
});

// Add User routes (Considering to merge this into UserController later)
Route::get('add', [AddUserController::class, 'create'])->name('add');
Route::post('add', [AddUserController::class, 'store'])->name('store');