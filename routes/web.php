<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Testing Reuse Navbar & Footer
Route::get('/test', function () {
    return view('test');
});

// Public Pages
Route::get('/', function () { return view('homeindex'); });
Route::get('/productpg', function () { return view('productpg'); });
Route::get('/aboutus', function () { return view('aboutus'); });
Route::get('/artisanpg', function () { return view('artisanpg'); });
Route::get('/contactus', function () { return view('contactus'); });
Route::get('/wishlist', function () { return view('wishlist'); });
Route::get('/loginpg', function () { return view('loginpg'); });

Route::get('/cart', function () { return view('cart'); });

// Auth Routes
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/registerpg', [AuthController::class, 'showRegisterPage']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Artisan Registration Page with Default Role
Route::get('/register-artisan', function () {
    return view('registerpg', ['default_role' => 'artisan']);
});

// Artisan Dashboard – Authenticated Users with 'artisan' Role Only
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role !== 'artisan') {
            return redirect('/');
        }
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // or whatever your Blade file is
    })->name('dashboard');
});