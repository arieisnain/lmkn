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

Route::get('/test-database-connection', function () {
    try {
        // Mencoba untuk membuat koneksi ke database
        \Illuminate\Support\Facades\DB::connection()->getPdo();

        // Jika tidak terjadi kesalahan, koneksi berhasil
        return "Koneksi database berhasil!";
    } catch (\Exception $e) {
        // Jika terjadi kesalahan, tangkap pesan kesalahan
        return "Tidak dapat terhubung ke database: " . $e->getMessage();
    }
});


Route::get('/', function () {
    return view('welcome');
});
