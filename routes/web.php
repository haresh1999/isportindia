<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
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

Route::get('/', function () {
    // dd(getSeasons()['response']['items']);
    return view('layout.main');
});



Route::prefix('admin')->group(function(){
    
    Route::get('/',[LoginController::class,'login'])->name('login');
    Route::post('login',[LoginController::class,'submit'])->name('login.submit');
    
    Route::middleware('admin.auth')->group(function(){
        Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
        Route::get('logout',[LoginController::class,'logout'])->name('logout');
    });
});