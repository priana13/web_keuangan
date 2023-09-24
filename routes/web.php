<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('welcome');
    return redirect()->route('login');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/pengeluaran', \App\Livewire\HalamanPengeluaran::class)->name('pengeluaran');
    Route::get('/pemasukan', \App\Livewire\HalamanPemasukan::class)->name('pemasukan');
    Route::get('/laporan', \App\Livewire\HalamanLaporan::class)->name('laporan');
    Route::get('/pajak', \App\Livewire\HalamanPajak::class)->name('pajak');
    Route::get('/pengaturan', \App\Livewire\HalamanPengaturan::class)->name('pengaturan');
    Route::get('/closing-toko', \App\Livewire\HalamanClosingToko::class)->name('closing-toko');








});
