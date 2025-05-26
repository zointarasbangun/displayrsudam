<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TestiController;
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

Route::get('/dokterkami', [DashboardController::class, 'dokterkami'])->name('dokterkami');

Route::get('/fasilitasrsudam', [DashboardController::class, 'fasilitasrsudam'])->name('fasilitasrsudam');

Route::get('/pendaftaranonline', [DashboardController::class, 'pendaftaranonline'])->name('pendaftaranonline');

Route::get('/infodarurat', [DashboardController::class, 'infodarurat'])->name('infodarurat');

Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');

Route::get('/petakontak', [DashboardController::class, 'petakontak'])->name('petakontak');

Route::get('/infodarurat', [DashboardController::class, 'infodarurat'])->name('infodarurat');

Route::get('/dokter', [DokterController::class, 'dokter']);

Route::group(['middleware' => ['auth', 'superadmin'], 'as' => 'superadmin.', 'prefix' => 'superadmin'], function () {
    Route::get('/pengguna', [AccountController::class, 'kelolaakun'])->name('kelolaakun');
    Route::post('/pengguna/store', [AccountController::class, 'storeakun'])->name('pengguna.store');
    Route::post('/pengguna/update/{id}', [AccountController::class, 'updateakun'])->name('pengguna.update');
    Route::delete('/pengguna/delete/{id}', [AccountController::class, 'destroyakun'])->name('pengguna.delete');

    Route::get('/testimoni', [TestiController::class, 'index'])->name('testimoni.index');
    Route::post('/testimoni/store', [TestiController::class, 'tambahnama'])->name('testimoni.store');
    Route::post('/testimoni/update/{id}', [TestiController::class, 'update'])->name('testimoni.update');
    Route::delete('/testimoni/delete/{id}', [TestiController::class, 'destroy'])->name('testimoni.delete');

    Route::get('/runningtext', [MarqueeController::class, 'runningtext'])->name('runningtext.index');
    Route::post('/runningtext/store', [MarqueeController::class, 'store'])->name('runningtext.store');
    Route::post('/runningtext/update/{id}', [MarqueeController::class, 'update'])->name('runningtext.update');
    Route::delete('/runningtext/delete/{id}', [MarqueeController::class, 'destroy'])->name('runningtext.delete');

    Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');
    Route::post('/dokter/create', [DokterController::class, 'store'])->name('dokter.store');
    Route::post('/dokter/update/{id}', [DokterController::class, 'update'])->name('dokter.update');
    Route::get('/dokter/{id}', [DokterController::class, 'show'])->name('dokter.show'); // untuk fetch 1 data dokter
    Route::delete('/dokter/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');


});

Route::group(['middleware' => ['auth', 'admin'], 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/runningtext', [MarqueeController::class, 'runningtext'])->name('runningtext.index');
    Route::post('/runningtext/store', [MarqueeController::class, 'store'])->name('runningtext.store');
    Route::post('/runningtext/update/{id}', [MarqueeController::class, 'update'])->name('runningtext.update');
    Route::delete('/runningtext/delete/{id}', [MarqueeController::class, 'destroy'])->name('runningtext.delete');

    Route::get('/testimoni', [TestiController::class, 'index'])->name('testimoni.index');
    Route::post('/testimoni/store', [TestiController::class, 'tambahnama'])->name('testimoni.store');
    Route::post('/testimoni/update/{id}', [TestiController::class, 'update'])->name('testimoni.update');
    Route::delete('/testimoni/delete/{id}', [TestiController::class, 'destroy'])->name('testimoni.delete');

    Route::get('/runningtext', [MarqueeController::class, 'runningtext'])->name('runningtext.index');
    Route::post('/runningtext/store', [MarqueeController::class, 'store'])->name('runningtext.store');
    Route::post('/runningtext/update/{id}', [MarqueeController::class, 'update'])->name('runningtext.update');
    Route::delete('/runningtext/delete/{id}', [MarqueeController::class, 'destroy'])->name('runningtext.delete');
});
