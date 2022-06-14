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

//Kelas
Route::get('/kelas', 'App\Http\Controllers\KelasController@getDataKelas');
Route::get('/kelas/{idkelas}', 'App\Http\Controllers\KelasController@getDataKelasById');
Route::post('/insertkelas', 'App\Http\Controllers\KelasController@InsertDataKelas');
Route::put('/updatekelas', 'App\Http\Controllers\KelasController@UpdateDataKelas');
Route::delete('/deletekelas', 'App\Http\Controllers\KelasController@deleteDataKelas');
Route::delete('/kelas/{idkelas}', 'App\Http\Controllers\KelasController@deleteDataKelasParam');
Route::get('/kelastoken', 'App\Http\Controllers\KelasController@getDataKelasToken');

//Mapel
Route::get('/mapel', 'App\Http\Controllers\MapelController@getDataMapel');
Route::get('/mapel/{idmapel}', 'App\Http\Controllers\MapelController@getDataMapelById');
Route::post('/insertmapel', 'App\Http\Controllers\MapelController@InsertDataMapel');
Route::put('/updatemapel', 'App\Http\Controllers\MapelController@UpdateDataMapel');
Route::delete('/deletemapel', 'App\Http\Controllers\MapelController@deleteDataMapel');
Route::delete('/mapel/{idmapel}', 'App\Http\Controllers\MapelController@deleteDataMapelParam');
Route::get('/mapeltoken', 'App\Http\Controllers\MapelController@getDataMapelToken');


//Jadwal Guru
Route::get('/jadwal', 'App\Http\Controllers\JadwalGuruController@getDataJadwal');
Route::get('/jadwal/{idjadwal}', 'App\Http\Controllers\JadwalGuruController@getDataJadwalById');
Route::post('/insertjadwal', 'App\Http\Controllers\JadwalGuruController@InsertDataJadwal');
Route::put('/updatejadwal', 'App\Http\Controllers\JadwalGuruController@UpdateDataJadwal');
Route::delete('/deletejadwal', 'App\Http\Controllers\JadwalGuruController@deleteDataJadwal');
Route::delete('/jadwal/{idjadwal}', 'App\Http\Controllers\JadwalGuruController@deleteDataJadwalParam');
Route::get('/jadwaltoken', 'App\Http\Controllers\JadwalGuruController@getDataJadwalToken');

//Guru
Route::get('/guru', 'App\Http\Controllers\GuruController@getDataGuru');
Route::get('/guru/{idguru}', 'App\Http\Controllers\GuruController@getDataGuruById');
Route::post('/insertguru', 'App\Http\Controllers\GuruController@InsertDataGuru');
Route::put('/updateguru', 'App\Http\Controllers\GuruController@UpdateDataGuru');
Route::delete('/deleteguru', 'App\Http\Controllers\GuruController@deleteDataGuru');
Route::delete('/guru/{idguru}', 'App\Http\Controllers\GuruController@deleteDataGuruParam');
Route::get('/gurutoken', 'App\Http\Controllers\GuruController@getDataGuruToken');

//Presensi Harian
Route::get('/presensi_harian', 'App\Http\Controllers\PresensiHarianController@getDataPresensiHarian');
Route::get('/presensi_harian/{idpresensiharian}', 'App\Http\Controllers\PresensiHarianController@getDataPresensiHarianById');
Route::post('/insertpresensi_harian', 'App\Http\Controllers\PresensiHarianController@InsertDataPresensiHarian');
Route::put('/updatepresensi_harian', 'App\Http\Controllers\PresensiHarianController@UpdateDataPresensiHarian');
Route::delete('/deletepresensi_harian', 'App\Http\Controllers\PresensiHarianController@deleteDataPresensiHarian');
Route::delete('/presensi_harian/{idpresensiharian}', 'App\Http\Controllers\PresensiHarianController@deleteDataPresensiHarianParam');
Route::get('/presensihariantoken', 'App\Http\Controllers\PresensiHarianController@getDataPresensiHarianToken');

//Presensi Mengajar
Route::get('/presensi_mengajar', 'App\Http\Controllers\PresensiMengajarController@getDataPresensiMengajar');
Route::get('/presensi_mengajar/{idpresensimengajar}', 'App\Http\Controllers\PresensiMengajarController@getDataPresensiMengajarById');
Route::post('/insertpresensi_mengajar', 'App\Http\Controllers\PresensiMengajarController@InsertDataPresensiMengajar');
Route::put('/updatepresensi_mengajar', 'App\Http\Controllers\PresensiMengajarController@UpdateDataPresensiMengajar');
Route::delete('/deletepresensi_mengajar', 'App\Http\Controllers\PresensiMengajarController@deleteDataPresensiMengajar');
Route::delete('/presensi_mengajar/{idpresensimengajar}', 'App\Http\Controllers\PresensiMengajarController@deleteDataPresensiMengajarParam');
Route::get('/presensimengajarantoken', 'App\Http\Controllers\PresensiMengajarController@getDataPresensiMengajarToken');

Route::get('/latihan1', 'App\Http\Controllers\LatihanJson@latihanSatu');
Route::get('/latihan2', 'App\Http\Controllers\LatihanJson@latihanDua');
Route::get('/latihan3', 'App\Http\Controllers\LatihanJson@latihanTiga');
Route::get('/latihan4', 'App\Http\Controllers\LatihanJson@latihanEmpat');
Route::get('/latihan5', 'App\Http\Controllers\LatihanJson@latihanLima');
