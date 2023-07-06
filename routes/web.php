<?php

use Illuminate\Support\Facades\Route;

// FRONT
use App\Http\Controllers\HomeController;

// ADMIN
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CricSpecialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// dd(getTopTeam());

// dd(getSeasons('seasons/2021/competitions'));

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('post-details/{id}/{slug}', [HomeController::class, 'postDetails'])->name('post.details');
Route::get('cricspecial-details/{id}/{slug}', [HomeController::class, 'cricspecialDetails'])->name('cricspecial.details');
Route::get('score-card/{match_id}', [HomeController::class, 'scoreCard'])->name('score.card');

Route::prefix('admin')->group(function () {

    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'submit'])->name('login.submit');

    Route::middleware('admin.auth')->group(function () {

        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::get('article', [ArticleController::class, 'index'])->name('article');
        Route::get('article/create', [ArticleController::class, 'create'])->name('article.create');
        Route::post('article/store', [ArticleController::class, 'store'])->name('article.store');
        Route::get('article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
        Route::post('article/update/{id}', [ArticleController::class, 'update'])->name('article.update');
        Route::get('article/destroy/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');

        Route::get('cricspecial', [CricSpecialController::class, 'index'])->name('cricspecial');
        Route::get('cricspecial/create', [CricSpecialController::class, 'create'])->name('cricspecial.create');
        Route::post('cricspecial/store', [CricSpecialController::class, 'store'])->name('cricspecial.store');
        Route::get('cricspecial/edit/{id}', [CricSpecialController::class, 'edit'])->name('cricspecial.edit');
        Route::post('cricspecial/update/{id}', [CricSpecialController::class, 'update'])->name('cricspecial.update');
        Route::get('cricspecial/destroy/{id}', [CricSpecialController::class, 'destroy'])->name('cricspecial.destroy');

        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });
});
