<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GudangController;

Route::get('/', function () {
    return view('auth/login');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('loginAction');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware(['auth'])->group(function(){
    Route::resource('admin', AdminController::class)->except('show');
    Route::resource('gudang', GudangController::class)->except('show');
    Route::resource('kasir', KasirController::class)->except('show');
});
