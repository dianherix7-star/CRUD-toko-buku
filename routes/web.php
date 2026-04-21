<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;

Route::get('/', [TokoController::class, 'index'])->name('buku.index');

Route::get('/create', [TokoController::class, 'create'])->name('buku.create');
Route::post('/store', [TokoController::class, 'store'])->name('buku.store');

Route::get('/edit/{id}', [TokoController::class, 'edit'])->name('buku.edit');
Route::put('/update/{id}', [TokoController::class, 'update'])->name('buku.update');

Route::get('/delete/{id}', [TokoController::class, 'destroy'])->name('buku.delete');