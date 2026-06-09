<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HargaController;


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| PROTECTED ADMIN AREA
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Pengiriman
    |--------------------------------------------------------------------------
    */

    Route::get('/pengiriman', [PengirimanController::class, 'index'])
        ->name('pengiriman.index');

    Route::get('/pengiriman/riwayat-hapus', [PengirimanController::class, 'riwayatHapus'])
        ->name('pengiriman.riwayat-hapus');

    Route::get('/pengiriman/export', [PengirimanController::class, 'exportData'])
        ->name('pengiriman.export');

    Route::post('/pengiriman', [PengirimanController::class, 'store'])
        ->middleware('role:admin,operasional')
        ->name('pengiriman.store');

    Route::get('/pengiriman/{pengiriman}', [PengirimanController::class, 'show'])
        ->name('pengiriman.show');

    Route::get('/pengiriman/{pengiriman}/edit', [PengirimanController::class, 'edit'])
        ->middleware('role:admin,operasional')
        ->name('pengiriman.edit');

    Route::put('/pengiriman/{pengiriman}', [PengirimanController::class, 'update'])
        ->middleware('role:admin,operasional')
        ->name('pengiriman.update');

    Route::delete('/pengiriman/{pengiriman}', [PengirimanController::class, 'destroy'])
        ->middleware('role:admin')
        ->name('pengiriman.destroy');

    Route::patch('/pengiriman/{pengiriman}/status', [PengirimanController::class, 'updateStatus'])
        ->name('pengiriman.update-status');

    Route::post('/pengiriman/{id}/restore', [PengirimanController::class, 'restore'])
        ->middleware('role:admin')
        ->name('pengiriman.restore');

    /*
    |--------------------------------------------------------------------------
    | Tracking
    |--------------------------------------------------------------------------
    */

    Route::get('/tracking', [TrackingController::class, 'index'])
        ->name('tracking.index');

    Route::get('/tracking/cari', [TrackingController::class, 'cari'])
        ->name('tracking.cari');

    Route::post(
        '/tracking/{pengiriman}/history',
        [TrackingController::class, 'tambahHistory']
    )->name('tracking.tambah-history');

    Route::get(
        '/tracking/{pengiriman}/create',
        [TrackingController::class, 'create']
    )->name('tracking.create');

    Route::post(
        '/tracking/store',
        [TrackingController::class, 'store']
    )->name('tracking.store');

    /*
    |--------------------------------------------------------------------------
    | Invoice
    |--------------------------------------------------------------------------
    */

    Route::get('/invoice', [InvoiceController::class, 'index'])
        ->name('invoice.index');

    Route::post('/invoice', [InvoiceController::class, 'store'])
        ->name('invoice.store');

    Route::get('/invoice/export/{id}', [InvoiceController::class, 'export'])
        ->name('invoice.export');

    Route::post('/invoice/{id}/bayar', [InvoiceController::class, 'bayar'])
        ->name('invoice.bayar');

    Route::post('/invoice/{id}/void', [InvoiceController::class, 'void'])
        ->middleware('role:admin')
        ->name('invoice.void');

    Route::post('/invoice/{id}/reminder', [InvoiceController::class, 'reminder'])
        ->name('invoice.reminder');

    Route::get('/invoice/{id}/print', [InvoiceController::class, 'show'])
        ->name('invoice.print');

    Route::get('/invoice/{id}/pdf', [InvoiceController::class, 'pdf'])
        ->name('invoice.pdf');

    /*
    |--------------------------------------------------------------------------
    | Laporan
    |--------------------------------------------------------------------------
    */

    Route::get('/laporan', [LaporanController::class, 'index'])
        ->name('laporan.index');

    Route::get('/laporan/export', [LaporanController::class, 'export'])
        ->name('laporan.export');

    Route::get('/laporan/export-pdf', [LaporanController::class, 'exportPdf'])
        ->name('laporan.pdf');

    /*
    |--------------------------------------------------------------------------
    | Pelanggan
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | Pelanggan
    |--------------------------------------------------------------------------
    */

    Route::get('/pelanggan', [PelangganController::class, 'index'])
        ->name('pelanggan.index');

    Route::get('/pelanggan/create', [PelangganController::class, 'create'])
        ->name('pelanggan.create');

    Route::post('/pelanggan', [PelangganController::class, 'store'])
        ->name('pelanggan.store');

    Route::get('/pelanggan/{pelanggan}', [PelangganController::class, 'show'])
        ->name('pelanggan.show');

    Route::get('/pelanggan/{pelanggan}/edit', [PelangganController::class, 'edit'])
        ->name('pelanggan.edit');

    Route::put('/pelanggan/{pelanggan}', [PelangganController::class, 'update'])
        ->name('pelanggan.update');

    Route::delete('/pelanggan/{pelanggan}', [PelangganController::class, 'destroy'])
        ->name('pelanggan.destroy');


    /*
    |--------------------------------------------------------------------------
    | Harga
    |--------------------------------------------------------------------------
    */


    Route::get('/harga', [HargaController::class, 'index'])
        ->name('harga.index');

    Route::post('/harga', [HargaController::class, 'store'])
        ->name('harga.store');

    Route::get('/harga/{harga}/edit', [HargaController::class, 'edit'])
        ->name('harga.edit');

    Route::put('/harga/{harga}', [HargaController::class, 'update'])
        ->name('harga.update');

    Route::delete('/harga/{harga}', [HargaController::class, 'destroy'])
        ->name('harga.destroy');
});


Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/cek-resi', [TrackingController::class, 'trackingPublic'])
    ->name('frontend.tracking');

Route::view('about', 'frontend.about')
    ->name('about');

Route::view('layanan', 'frontend.services')
    ->name('services');

Route::view('/jangkauan', 'frontend.coverage')
    ->name('coverage');

Route::view('/faq', 'frontend.faq')
    ->name('faq');

Route::view('/kontak', 'frontend.contact')
    ->name('contact');
