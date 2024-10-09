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
