<?php

use App\Http\Controllers\CryptoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [CryptoController::class, 'index'])->name('home');
Route::get('/cdashboard', [CryptoController::class, 'getData'])->name('cdashboard');
Route::get('/about', [CryptoController::class, 'about'])->name('about');
Route::get('/info', [CryptoController::class, 'info'])->name('info');
Route::get('/auth', [CryptoController::class, 'admin'])->name('auth');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
