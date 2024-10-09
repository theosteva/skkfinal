<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // Mengarahkan ke index.blade.php
})->name('home'); // Menambahkan nama rute

Route::get('/kontak', function () {
    return view('kontak'); // Mengarahkan ke kontak.blade.php
})->name('kontak'); // Menambahkan nama rute

Route::get('/mitra', function () {
    return view('mitra'); // Mengarahkan ke mitra.blade.php
})->name('mitra'); // Menambahkan nama rute

Route::get('/daftar-produk', function () {
    return view('daftar-produk'); // Mengarahkan ke daftar-produk.blade.php
})->name('daftar-produk'); // Menambahkan nama rute

Route::get('/lowongan', function () {
    return view('lowongan'); // Mengarahkan ke lowongan.blade.php
})->name('lowongan'); // Menambahkan nama rute
