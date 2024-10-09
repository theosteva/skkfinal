<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // Mengarahkan ke index.blade.php
});

Route::get('/kontak', function () {
    return view('kontak'); // Mengarahkan ke kontak.blade.php
});

Route::get('/mitra', function () {
    return view('mitra'); // Mengarahkan ke mitra.blade.php
});
