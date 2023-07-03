<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('post-details/{slug}', [HomeController::class, 'postDetails'])->name('post.details');


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

        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });
});
