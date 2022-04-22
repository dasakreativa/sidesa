<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

# ======================== Login System ======================== #
Route::prefix('auth')->name('login.')->group(function($rute) {
    $rute->get('/', [\App\Http\Controllers\LoginController::class, 'index'])->name('index');
    $rute->post('/', [\App\Http\Controllers\LoginController::class, 'process'])->name('process');
});
