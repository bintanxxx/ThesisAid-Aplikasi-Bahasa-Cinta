<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->name('dashboard');


// Rute untuk menampilkan halaman kuesioner
Route::get('/kuesioner', function () {
    return view('user.kuesioner');
});

// Rute untuk menampilkan halaman hasil diagnosis
Route::get('/hasil', function () {
    return view('user.hasil');
});


// Otentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Rute Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

// Rute untuk menampilkan daftar gejala
Route::get('/admin/symptoms', function() {
    return view('admin.symptoms.index');
});

// Rute untuk menampilkan form tambah gejala
Route::get('/admin/symptoms/create', function() {
    return view('admin.symptoms.create');
});

// Rute untuk menampilkan form edit gejala
Route::get('/admin/symptoms/edit', function() {
    // Nanti kita akan tambahkan ID gejala di sini, misal: /edit/{id}
    return view('admin.symptoms.edit');
});