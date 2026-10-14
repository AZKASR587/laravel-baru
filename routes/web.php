<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Route untuk Halaman Utama / Home
Route::get('/', function () {
    return view('page.home');
});

Route::get('/home', function () {
    return view('page.home');
});

// Route untuk Halaman About & Profile
Route::get('/about', function () {
    return view('page.about');
});

Route::get('/profile', function () {
    return view('page.profile');
});

// Route untuk Portofolio Project (Menggunakan ProjectController yang lengkap dengan name)
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');