<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;

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
Route::get('/master', function () {
    return view('master');
});

Route::get('/karyawan/tambah/', [UserController::class, 'create']);
Route::get('/karyawan', [UserController::class, 'index']);
Route::post('/karyawan/store', [UserController::class, 'store']);
Route::get('/karyawan/{id}', [UserController::class, 'show']);
Route::get('/karyawan/edit/{id}', [UserController::class, 'edit']);
Route::put('/karyawan/update/{id}', [UserController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [UserController::class, 'destroy']);

Route::get('/jabatan', [JobController::class, 'index']);
Route::get('/jabatan/tambah', [JobController::class, 'create']);
Route::post('/jabatan/store', [JobController::class, 'store']);
Route::get('/jabatan/edit/{id}', [JobController::class, 'edit']);
Route::put('/jabatan/update/{id}', [JobController::class, 'update']);
Route::get('/jabatan/hapus/{id}', [JobController::class, 'destroy']);