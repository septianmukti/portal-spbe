<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountController;

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

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog-single', 'single')->name('single-blog');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    
    Route::controller(AccountController::class)->group(function () {
        Route::get('/register', 'viewRegister')->name('register');
        Route::post('/register', 'registerUser')->name('register-user');
    });
    
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'viewprofile')->name('profile');
        Route::put('/profile', 'updateprofile')->name('update-profile');
        Route::get('/change-password', 'viewchangepassword')->name('change-password');
        Route::put('/change-password', 'updatePassword')->name('update-password');
    });
});
