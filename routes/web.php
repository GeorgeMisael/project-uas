<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PerkuliahanController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->middleware('auth');

// MENU ADMIN
// Menu Mahasiswa
Route::get('/mastermhs',[MasterController::class, 'mastermahasiswa'])->middleware('admin');
Route::get('/mastermk',[MasterController::class, 'mastermk'])->middleware('admin');
Route::get('/masterkelas',[MasterController::class, 'masterkelas'])->middleware('admin');
Route::get('/masterdosen',[MasterController::class, 'masterdosen'])->middleware('admin');

// Menu Perkuliahan
Route::get('/jadwalKuliah',[PerkuliahanController::class, 'jadwalKuliah'])->middleware('admin');
Route::get('/jadwalUjian',[PerkuliahanController::class, 'jadwalUjian'])->middleware('admin');
Route::get('/absenMahasiswa',[PerkuliahanController::class, 'absenMahasiswa'])->middleware('admin');
Route::get('/nilaiMahasiswa',[PerkuliahanController::class, 'nilaiMahasiswa'])->middleware('admin');

// Submit Menu Mahasiswa
Route::post('/submitmhs',[MasterController::class, 'submitMahasiswa']);
Route::post('/submitmk', [MasterController::class, 'submitMK']);
Route::post('/submitruang', [MasterController::class, 'submitRuangan']);
Route::post('/submitdosen', [MasterController::class, 'submitDosen']);

// Update Data
Route::get('/editmhs/{idmhs}',[MasterController::class, 'updateMahasiswa'])->middleware('admin');
Route::post('/submitedmhs',[MasterController::class, 'submit_editmhs'])->middleware('admin');

Route::get('/editmk/{idmk}', [MasterController::class, 'updateMataKuliah'])->middleware('admin');
Route::post('/submitedmk',[MasterController::class, 'submit_editmk'])->middleware('admin');

Route::get('/editkelas/{idkelas}', [MasterController::class, 'updateKelas'])->middleware('admin');
Route::post('/submitedkelas',[MasterController::class, 'submit_editkls'])->middleware('admin');

Route::get('/editdosen/{iddosen}',[MasterController::class, 'updateDosen'])->middleware('admin');
Route::post('/submiteddsn',[MasterController::class, 'submit_editdsn'])->middleware('admin');

Route::get('/edituser/{iduser}',[DashboardController::class, 'updateUser'])->middleware('auth');
Route::post('/submiteduser',[DashboardController::class, 'submit_edituser'])->middleware('auth');

// Delete Data
Route::get('/hapusmhs/{idmhs}',[MasterController::class, 'hapusMahasiswa'])->middleware('admin');
Route::get('/hapusmk/{idmatakuliah}',[MasterController::class, 'hapusMataKuliah'])->middleware('admin');
Route::get('/hapuskelas/{idkelas}',[MasterController::class, 'hapusKelas'])->middleware('admin');
Route::get('/hapusdosen/{iddosen}',[MasterController::class, 'hapusDosen'])->middleware('admin');

// MENU USER
Route::get('/usermk',[UserController::class, 'userMataKuliah'])->middleware('auth');
Route::get('/userdosen',[UserController::class, 'userDosen'])->middleware('auth');
Route::get('/userkelas',[UserController::class, 'userKelas'])->middleware('auth');