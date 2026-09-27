<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/home', function () {
    return view('page.home');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/profile', function () {
    $mahasiswa = [
        'nama' => 'AZKA SYAHMI RAMADHAN',
        'prodi' => 'Sistem Informasi',
        'nim' => '231011700012',
        'email' => 'AZKASR836@GMAIL.COM',
        'kampus' => 'UNPAM'
    ];

    return view('page.profile', compact('mahasiswa'));
});