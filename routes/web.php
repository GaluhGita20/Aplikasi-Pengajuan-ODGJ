<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\{
    FrontEndController,
};

use App\Http\Controllers\Admin\{
    AdminDashboardController,
    AdminPengajuanODGJController,
};
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

Auth::routes();
Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/login', [FrontEndController::class, 'login'])->name('login');
Route::get('/register', [FrontEndController::class, 'register'])->name('register');


// ebook
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/form', [AdminDashboardController::class, 'form'])->name('form');
    Route::get('/pengajuanODGJ', [AdminPengajuanODGJController::class, 'index'])->name('pengajuan');

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
