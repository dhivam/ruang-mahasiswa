<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/dashboard', [LoginController::class, 'postlogin'])->name('dashboard');
Route::get('/dashboard', [LoginController::class, 'index']);
Route::get('/dosen/{id}/profile', [DosenController::class, 'profile']);
Route::get('/dosen', [DosenController::class, 'dosen'])->name('dosen');
Route::get('/biodata', [LoginController::class, 'biodata']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/listmhs', [LoginController::class, 'admin'])->name('mahasiswa');


// admin mhs
Route::get('/mahasiswa', [AdminController::class, 'index']);
Route::get('/mahasiswa/tambah', [AdminController::class, 'tambahmhs']);
Route::post('/mahasiswa/store', [AdminController::class, 'storemhs']);
Route::get('/mahasiswa/edit/{id}', [AdminController::class, 'editmhs']);
Route::post('/mahasiswa/update', [AdminController::class, 'updatemhs']);
Route::get('/mahasiswa/hapus/{id}', [AdminController::class, 'hapusmhs']);

//admin matkul
Route::get('/matkul', [AdminController::class, 'matkul']);
Route::get('/matkul/tambah', [AdminController::class, 'tambahmatkul']);
Route::post('/matkul/store', [AdminController::class, 'storematkul']);
Route::get('/matkul/edit/{id}', [AdminController::class, 'editmatkul']);
Route::post('/matkul/update', [AdminController::class, 'updatematkul']);
Route::get('/matkul/hapus/{id}', [AdminController::class, 'hapusmatkul']);

//admin dosen
Route::get('/dosenadm', [AdminController::class, 'dosen']);
Route::get('/dosenadm/tambah', [AdminController::class, 'tambahdosen']);
Route::post('/dosenadm/store', [AdminController::class, 'storedosen']);
Route::get('/dosenadm/edit/{id}', [AdminController::class, 'editdosen']);
Route::post('/dosenadm/update', [AdminController::class, 'updatedosen']);
Route::get('/dosenadm/hapus/{id}', [AdminController::class, 'hapusdosen']);
