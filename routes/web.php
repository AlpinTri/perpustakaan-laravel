<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Anggota;
use App\Http\Controllers\Petugas;
use App\Http\Controllers\Buku;

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
    return view('home');
});

Route::resource('/anggota', Anggota::class);

Route::resource('/petugas', Petugas::class);

Route::resource('/buku', Buku::class);
