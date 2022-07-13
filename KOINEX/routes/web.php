<?php

use App\Http\Controllers\CryptoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [CryptoController::class, 'index'])->name('home');
Route::get('/cdashboard', [CryptoController::class, 'getData'])->name('cdashboard');
Route::get('/about', [CryptoController::class, 'about'])->name('about');
Route::get('/info', [CryptoController::class, 'info'])->name('info');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/contact-us', [ ContactController::class, 'getContact' ]);
Route::post('/contact-us', [ ContactController::class, 'saveContact' ])->name('contact-us');
