<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimoniController;
use App\http\Controllers\DashboardController;
use App\http\Controllers\MarqueeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/profilrsudam', [DashboardController::class, 'profilrsudam'])->name('profilrsudam');

Route::get('/layananunggulan', [DashboardController::class, 'layananunggulan'])->name('layananunggulan');

Route::get('/dokterspesialis', [DashboardController::class, 'dokterspesialis'])->name('dokterspesialis');

Route::get('/fasilitasrsudam', [DashboardController::class, 'fasilitasrsudam'])->name('fasilitasrsudam');

Route::get('/pendaftaranonline', [DashboardController::class, 'pendaftaranonline'])->name('pendaftaranonline');

Route::get('/infodarurat', [DashboardController::class, 'infodarurat'])->name('infodarurat');

Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');

Route::get('/petakontak', [DashboardController::class, 'petakontak'])->name('petakontak');

Route::get('/infodarurat', [DashboardController::class, 'infodarurat'])->name('infodarurat');

Route::get('/dokter', [DokterController::class, 'dokter']);

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['superadmin']], function () {
        Route::get('/pengguna', [AccountController::class, 'kelolaakun'])->name('kelolaakun');
        Route::post('/pengguna/store', [AccountController::class, 'storeakun'])->name('pengguna.store');
        Route::post('/pengguna/update{id}', [AccountController::class, 'updateakun'])->name('pengguna.update');
        Route::delete('/pengguna/delete{id}', [AccountController::class, 'destroyakun'])->name('pengguna.delete');

        Route::get('/runningtext', [MarqueeController::class, 'runningtext'])->name('runningtext.index');
        Route::post('/runningtext/store', [MarqueeController::class, 'store'])->name('runningtext.store');
        Route::post('/runningtext/update{id}', [MarqueeController::class, 'update'])->name('runningtext.update');
        Route::delete('/runningtext/delete{id}', [MarqueeController::class, 'destroy'])->name('runningtext.delete');


    });

    Route::group(['middleware' => ['admin']], function () {

    });
});
