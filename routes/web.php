<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;

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

// Halaman Utama Publik (Opsional, arahkan ke login admin atau landing page)
Route::get('/', function () {
    return redirect()->route('admin.login');
});

// Rute Publik Halaman Portofolio (Frontend)
Route::get('/projects', [ProjectController::class, 'indexPublic'])->name('projects.public');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.detail');

// Rute Halaman Login & Auth Admin
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Rute Admin yang diproteksi Middleware Auth
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard Admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // CRUD Resource Data Project Admin
    Route::resource('projects', ProjectController::class);
});