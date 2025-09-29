<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\DiagnosisController;
use App\Http\Controllers\Admin\SymptomController;

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

// untuk yang sudah login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DiagnosisController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/kuesioner', [DiagnosisController::class, 'showKuesioner'])->name('user.kuesioner');
    Route::post('/kuesioner', [DiagnosisController::class, 'processDiagnose'])->name('user.diagnose');
    Route::get('/hasil/{diagnosisId}', [DiagnosisController::class, 'showHasil'])->name('user.hasil');
});


// Rute Admin
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
        
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    
    // Rute Gejala
    Route::resource('symptoms', SymptomController::class);
});