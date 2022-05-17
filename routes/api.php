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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kelas', 'App\Http\Controllers\KelasController@getDataKelas');
Route::get('/kelas/{idkelas}', 'App\Http\Controllers\KelasController@getDataKelasById');

Route::get('/latihan1', 'App\Http\Controllers\LatihanJson@latihanSatu');
Route::get('/latihan2', 'App\Http\Controllers\LatihanJson@latihanDua');
Route::get('/latihan3', 'App\Http\Controllers\LatihanJson@latihanTiga');
Route::get('/latihan4', 'App\Http\Controllers\LatihanJson@latihanEmpat');
Route::get('/latihan5', 'App\Http\Controllers\LatihanJson@latihanLima');
