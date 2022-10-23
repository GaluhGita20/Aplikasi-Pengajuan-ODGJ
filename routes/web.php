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
Route::get('/workflow', [FrontEndController::class, 'workflow'])->name('workflow');
Route::get('/partnerRSJ', [FrontEndController::class, 'partnerRSJ'])->name('partnerRSJ');
Route::get('/donasi', [FrontEndController::class, 'donasi'])->name('donasi');
Route::get('/login', [FrontEndController::class, 'login'])->name('login');
Route::get('/register', [FrontEndController::class, 'register'])->name('register');


// ebook
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/obat', [AdminDashboardController::class, 'obatIndex'])->name('obat.index');
    Route::get('/obat/add', [AdminDashboardController::class, 'obatAdd'])->name('obat.add');
    Route::post('/obat/save', [AdminDashboardController::class, 'obatSave'])->name('obat.save');
    Route::get('/obat/edit/{id}', [AdminDashboardController::class, 'obatEdit'])->name('obat.edit');
    Route::post('/obat/update/{id}', [AdminDashboardController::class, 'obatUpdate'])->name('obat.update');
    Route::post('/obat/delete/{id}', [AdminDashboardController::class, 'obatDelete'])->name('obat.delete');
    Route::get('/form', [AdminDashboardController::class, 'form'])->name('form');
    Route::get('/pengajuanODGJ', [AdminPengajuanODGJController::class, 'index'])->name('pengajuan');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

