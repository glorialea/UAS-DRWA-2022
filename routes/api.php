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
Route::post('/kelas', 'App\Http\Controllers\KelasController@InsertDataKelas');
Route::put('/kelas', 'App\Http\Controllers\KelasController@UpdateDataKelas');
Route::delete('/kelas', 'App\Http\Controllers\KelasController@deleteDataKelas');
Route::delete('/kelas/{idkelas}', 'App\Http\Controllers\KelasController@deleteDataKelasParam');
Route::get('/kelastoken', 'App\Http\Controllers\KelasController@getDataKelasToken');
Route::middleware('auth:api')->get('/kelas/{idkelas}', 'App\Http\Controllers\KelasController@getDataKelasById');

Route::get('/mapel', 'App\Http\Controllers\MapelController@getDataMapel');
Route::get('/mapel/{idmapel}', 'App\Http\Controllers\MapelController@getDataMapelById');
Route::post('/mapel', 'App\Http\Controllers\MapelController@InsertDataMapel');
Route::put('/mapel', 'App\Http\Controllers\MapelController@UpdateDataMapel');
Route::delete('/mapel', 'App\Http\Controllers\MapelController@deleteDataMapel');
Route::delete('/mapel/{idmapel}', 'App\Http\Controllers\MapelController@deleteDataMapelParam');
Route::get('/mapeltoken', 'App\Http\Controllers\MapelController@getDataMapelToken');
Route::middleware('auth:api')->get('/mapel/{idmapel}', 'App\Http\Controllers\MapelController@getDataMapelById');

Route::get('/jadwal', 'App\Http\Controllers\JadwalGuruController@getDataJadwal');
Route::get('/jadwal/{idjadwal}', 'App\Http\Controllers\JadwalGuruController@getDataJadwalById');
Route::post('/jadwal', 'App\Http\Controllers\JadwalGuruController@InsertDataJadwal');
Route::put('/jadwal', 'App\Http\Controllers\JadwalGuruController@UpdateDataJadwal');
Route::delete('/jadwal', 'App\Http\Controllers\JadwalGuruController@deleteDataJadwal');
Route::delete('/jadwal/{idjadwal}', 'App\Http\Controllers\JadwalGuruController@deleteDataJadwalParam');
Route::get('/jadwaltoken', 'App\Http\Controllers\JadwalGuruController@getDataJadwalToken');
Route::middleware('auth:api')->get('/jadwal/{idjadwal}', 'App\Http\Controllers\JadwalGuruController@getDataJadwalById');

Route::get('/guru', 'App\Http\Controllers\GuruController@getDataGuru');
Route::get('/guru/{idguru}', 'App\Http\Controllers\GuruController@getDataGuruById');
Route::post('/guru', 'App\Http\Controllers\GuruController@InsertDataGuru');
Route::put('/guru', 'App\Http\Controllers\GuruController@UpdateDataGuru');
Route::delete('/guru', 'App\Http\Controllers\GuruController@deleteDataGuru');
Route::delete('/guru/{idguru}', 'App\Http\Controllers\GuruController@deleteDataGuruParam');
Route::get('/gurutoken', 'App\Http\Controllers\GuruController@getDataGuruToken');
Route::middleware('auth:api')->get('/guru/{idguru}', 'App\Http\Controllers\GuruController@getDataGuruById');

Route::get('/presensi_harian', 'App\Http\Controllers\PresensiHarianController@getDataPresensiHarian');
Route::get('/presensi_harian/{idpresensiharian}', 'App\Http\Controllers\PresensiHarianController@getDataPresensiHarianById');
Route::post('/presensi_harian', 'App\Http\Controllers\PresensiHarianController@InsertDataPresensiHarian');
Route::put('/presensi_harian', 'App\Http\Controllers\PresensiHarianController@UpdateDataPresensiHarian');
Route::delete('/presensi_harian', 'App\Http\Controllers\PresensiHarianController@deleteDataPresensiHarian');
Route::delete('/presensi_harian/{idpresensiharian}', 'App\Http\Controllers\PresensiHarianController@deleteDataPresensiHarianParam');
Route::get('/presensihariantoken', 'App\Http\Controllers\PresensiHarianController@getDataPresensiHarianToken');
Route::middleware('auth:api')->get('/presensi_harian/{idpresensiharian}', 'App\Http\Controllers\PresensiHarianController@getDataPresensiHarianById');

Route::get('/presensi_mengajar', 'App\Http\Controllers\PresensiMengajarController@getDataPresensiMengajar');
Route::get('/presensi_mengajar/{idpresensimengajar}', 'App\Http\Controllers\PresensiMengajarController@getDataPresensiMengajarById');
Route::post('/presensi_mengajar', 'App\Http\Controllers\PresensiMengajarController@InsertDataPresensiMengajar');
Route::put('/presensi_mengajar', 'App\Http\Controllers\PresensiMengajarController@UpdateDataPresensiMengajar');
Route::delete('/presensi_mengajar', 'App\Http\Controllers\PresensiMengajarController@deleteDataPresensiMengajar');
Route::delete('/presensi_mengajar/{idpresensimengajar}', 'App\Http\Controllers\PresensiMengajarController@deleteDataPresensiMengajarParam');
Route::get('/presensimengajarantoken', 'App\Http\Controllers\PresensiMengajarController@getDataPresensiMengajarToken');
Route::middleware('auth:api')->get('/presensi_mengajar/{idpresensimengajar}', 'App\Http\Controllers\PresensiMengajarController@getDataPresensiMengajarById');

Route::get('/latihan1', 'App\Http\Controllers\LatihanJson@latihanSatu');
Route::get('/latihan2', 'App\Http\Controllers\LatihanJson@latihanDua');
Route::get('/latihan3', 'App\Http\Controllers\LatihanJson@latihanTiga');
Route::get('/latihan4', 'App\Http\Controllers\LatihanJson@latihanEmpat');
Route::get('/latihan5', 'App\Http\Controllers\LatihanJson@latihanLima');
