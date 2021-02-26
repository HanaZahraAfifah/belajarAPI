<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('artikel', App\Http\Controllers\ArtikelAPIController::class);

Route::apiResource('kategori_artikel', App\Http\Controllers\KategoriArtikelAPIController::class);

Route::apiResource('berita', App\Http\Controllers\BeritaAPIController::class);

Route::apiResource('kategori_berita', App\Http\Controllers\KategoriBeritaAPIController::class);

Route::apiResource('pengumuman', App\Http\Controllers\PengumumanAPIController::class);

Route::apiResource('kategori_pengumuman', App\Http\Controllers\KategoriPengumumanAPIController::class);

Route::apiResource('galeri', App\Http\Controllers\GaleriAPIController::class);

Route::apiResource('kategori_galeri', App\Http\Controllers\KategoriGaleriAPIController::class);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('soal1','App\Http\Controllers\BabSatuController@a1');

Route::get('soal2','App\Http\Controllers\BabSatuController@a1');

Route::get('soal3','App\Http\Controllers\BabSatuController@a1');

Route::get('soal4','App\Http\Controllers\BabSatuController@a1');

Route::get('soal5','App\Http\Controllers\BabDuaController@a1');

Route::get('soal6','App\Http\Controllers\BabDuaController@a1');

Route::get('soal7','App\Http\Controllers\BabDuaController@a1');