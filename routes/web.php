<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\HitungController;

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

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/', [AnggaranController::class, 'show']);
Route::get('/hitung', [HitungController::class, 'hitung']);
Route::get('/hitung_sub_kom', [HitungController::class, 'hitung_sub_kom']);
Route::get('/hitung_kom', [HitungController::class, 'hitung_kom']);
Route::get('/hitung_ro', [HitungController::class, 'hitung_ro']);
Route::get('/hitung_kro', [HitungController::class, 'hitung_kro']);
Route::get('/hitung_kegiatan', [HitungController::class, 'hitung_kegiatan']);
Route::get('/hitung_program', [HitungController::class, 'hitung_program']);
Route::get('/hitung_satker', [HitungController::class, 'hitung_satker']);
Route::get('/hitung_tanggal', [HitungController::class, 'hitung_tanggal']);