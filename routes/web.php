<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LayananController;

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
    Route::get('/berita', 'newsLayout')->name('news-layout');
    Route::get('/blog-single', 'single')->name('single-blog');
    Route::get('/kebijakan-spbe', 'kebijakanSPBE')->name('kebijakan.spbe');
    Route::get('/tata-kelola-spbe', 'tataKelolaSPBE')->name('tata.kelola.spbe');
    Route::get('/manajemen-spbe', 'manajemenSPBE')->name('manajemen.spbe');

});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    
    Route::controller(AccountController::class)->group(function () {
        Route::get('/account-management', 'viewAccountManagement')->name('account-management');
        Route::get('/account-management/users/{id}', 'showAccount')->name('show-account');
        Route::put('/account-management/change-account-password/{id}', 'changeAccountPassword')->name('change-account-password');
        Route::delete('/account-management/delete/{id}', 'deleteAccount')->name('delete-account');
        Route::post('/register-account', 'registerAccount')->name('register-account');
    });
    
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'viewprofile')->name('profile');
        Route::put('/profile', 'updateprofile')->name('update-profile');
        Route::get('/change-password', 'viewchangepassword')->name('change-password');
        Route::put('/change-password', 'updatePassword')->name('update-password');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'category')->name('category');
        Route::post('/category', 'categoryAdd')->name('category-add');
        Route::delete('/category/delete/{id}', 'delete')->name('delete-category');
        Route::put('/category/edit/{id}', 'update')->name('category-edit');
    });

    Route::controller(NewsController::class)->group(function () {
        Route::get('/news-list', 'newsList')->name('news-list');
        Route::get('/news-list/news-upload', 'newsUpload')->name('news-upload');
        Route::post('/news-list/news-upload', 'newsUploadProcess')->name('news-upload-process');
    });

    Route::controller(LayananController::class)->group(function () {
        Route::get('/layanan', 'view')->name('layanan');
        Route::post('/layanan/layanan-add', 'post')->name('layanan-upload');
        Route::put('/layanan/layanan-edit/{id}', 'update')->name('layanan-update');
        Route::delete('/layanan/delete/{id}', 'delete')->name('delete-category');
    });
});
