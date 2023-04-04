<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;

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
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::patch('/siswa', [SiswaController::class, 'update'])->name('siswa.edit');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.tambah');
Route::get('/siswa/delete/{id}', [SiswaController::class, 'delete'])->name('siswa.hapus');
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/guru/{id}/profile', [GuruController::class, 'profile'])->name('profile.guru');
Route::post('/guru', [GuruController::class, 'store'])->name('guru.tambah');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/mapel', [MapelController::class, 'index'])->name('mapel');
Route::get('/siswa/{id}/profile', [SiswaController::class, 'profile'])->name('profile.siswa');