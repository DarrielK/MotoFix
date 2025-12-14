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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', AdminController::class)
        ->name('admin.index');
});

Route::middleware(['auth', 'role:gudang,admin'])->group(function () {
    Route::resource('gudang', GudangController::class)->except('show');
    Route::post('/gudang/barang-masuk', [GudangController::class, 'simpanBarangMasuk'])->name('gudang.barangmasuk.simpan');
    Route::get('/gudang/notification', [GudangController::class, 'notification'])->name('gudang.notification');
    Route::get('/gudang/laporan/barang-masuk', [GudangController::class, 'laporanBarangMasuk'])->name('gudang.laporan.barang-masuk');
    Route::get('/gudang/laporan/barang-keluar', [GudangController::class, 'laporanBarangKeluar'])->name('gudang.laporan.barang-keluar');
    
    Route::get('/gudang/service', [GudangController::class, 'service'])->name('gudang.service');
    Route::post('/gudang/service', [GudangController::class, 'serviceStore'])->name('gudang.service.store');
    Route::get('/gudang/service/{id}/edit', [GudangController::class, 'serviceEdit'])->name('gudang.service.edit');
    Route::put('/gudang/service/{id}', [GudangController::class, 'serviceUpdate'])->name('gudang.service.update');
    Route::delete('/gudang/service/{id}',[GudangController::class, 'serviceDestroy'])->name('gudang.service.destroy');

    Route::get('/gudang/category', [GudangController::class, 'category'])->name('gudang.category');
    Route::post('/gudang/category', [GudangController::class, 'categoryStore'])->name('gudang.category.store');
    Route::get('/gudang/category/{id}/edit', [GudangController::class, 'categoryEdit'])->name('gudang.category.edit');
    Route::put('/gudang/category/{id}', [GudangController::class, 'categoryUpdate'])->name('gudang.category.update');
    Route::delete('/gudang/category/{id}',[GudangController::class, 'categoryDestroy'])->name('gudang.category.destroy');
});

Route::middleware(['auth', 'role:kasir'])->group(function () {
    Route::resource('kasir', KasirController::class)->except('show');
    Route::get('/kasir/search-items', [KasirController::class, 'searchItems'])->name('kasir.search.items');
    Route::get('/kasir/search-services', [KasirController::class, 'searchServices'])->name('kasir.search.services');
});

