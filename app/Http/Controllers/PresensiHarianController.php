<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegisterUsers;
use Illuminate\Support\Str;

class PresensiHarianController extends Controller
{
    public function getDataPresensiHarian(){
        // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
         $ambildata = DB::table('presensi_harian')->get(); 
         if($ambildata){
          //   return response()->json(["Results"->
          //           ["ResultCode"->1, 
          //           ["ResultMessage"->"Sukses Login"], 
         //            "DataUser"->$ambildata
         //   ],200
         //);
         return response()->json(["User"=> "Gloria",
                                 "Waktu Akses"=> today(),
                                 //"result" => 1,
                                 "DataGuru"=> $ambildata], 200);
         }else {
             return response()->json(["Result"=>
             ["ResultCode"=>0,
             "ResultMassege"=>"User atau password salah"]], 401
             );
         }
 
     }
     
     public function getDataPresensiHarianById($idpresensiharian){
         // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
          $ambildata = DB::table('presensi_harian')
          ->where('id_presensi_harian',$idpresensiharian)
          ->get();
          if($ambildata){
           //   return response()->json(["Results"->
           //           ["ResultCode"->1, 
           //           ["ResultMessage"->"Sukses Login"], 
          //            "DataUser"->$ambildata
          //   ],200
          //);
          return response()->json($ambildata, 200);
          }else {
              return response()->json(["Result"=>
              ["ResultCode"=>0,
              "ResultMassege"=>"User atau password salah"]], 401
              );
          }
  
      }
      public function insertDataPresensiHarian (request $request){
         // DB::table('kelas')->insert([
         //     'kelas' => $request->input('kelas'),
         //     'jurusan' => $request->input('jurusan'),
         //     'sub'=> $request->input('sub')
         // ]);
          $arr_PresensiHarian = array('tahun_akademik' => input('tahun_akademik'), 
                             'semester' => input('semester'), 
                             'tanggal' => input('tanggal'), 
                             'hari' => input('hari'), 
                             'id_guru' => input('id_guru'),
                             'jam_masuk' => input('jam_masuk'), 
                             'jam_pulang' => input('jam_pulang'),
                             'metode' => input('metode'),
                             'keterangan' => input('keterangan')    
                             
         );
          DB::table('presensi_harian')->insert($arr_PresensiHarian);
         
         return response()->json(
             ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success Data Masuk Ke Database"
                ]
                ],200
            );
        }
 
      public function updateDataPresensiHarian(request $request){
          DB::table('presensi_harian')->where('id_presensi_harian', $request->input('id_presensi_harian'))->update([
              'tahun_akademik' => $request->input('tahun_akademik'),
              'semester' => $request->input('semester'),
              'tanggal' => $request->input('tanggal'),
              'hari' => $request->input('hari'),
              'id_guru' => $request->input('id_guru'),
              'jam_masuk' => $request->input('jam_masuk'),
              'jam_pulang' => $request->input('jam_pulang'),
              'metode' => $request->input('metode'),
              'keterangan' => $request->input('keterangan')
          ]);
          return response()->json(
             ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success Data Masuk Ke Database"
                ]
                ],200
            );
      }
      
      public function getDataPresensiHarianToken(){
         $token = Str::random(60);
         $hash_token = hash('sha256', $token);
         print_r($token);exit;
         // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
          $ambildata1 = DB::table('presensi_harian')->get();
          if($ambildata1){
           //   return response()->json(["Results"->
           //           ["ResultCode"->1, 
           //           ["ResultMessage"->"Sukses Login"], 
          //            "DataUser"->$ambildata
          //   ],200
          //);
          return response()->json(["User"=> "Gloria",
                                  "Waktu Akses"=> today(),
                                  //"result" => 1,
                                  "DataKelas"=> $ambildata1], 250);
          }else {
              return response()->json(["Result"=>
              ["ResultCode"=>0,
              "ResultMassege"=>"User atau password salah"]], 401
              );
          }
  
      }
      public function deleteDataPresensiHarian(request $request){
         dd($request->input('id_presensi_harian'));
          DB::table('presensi_harian')->where('id_presensi_harian', $request->input('id_presensi_harian'))->delete();
          
          return response()->json(
             ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success Data Berhasil Dihapus"
                ]
                ],200
            );
      }

      public function deleteDataPresensiHarianParam($id){
         dd($id);
         DB::table('presensi_harian')->where('id_presensi_harian', $id)->delete();
         return response()->json(
            ["Result"=>
               [
                   "ResultCode"=> 0,
                   "ResultMessage"=>"Success Data Berhasil Dihapus"
               ]
               ],200
           );
     }
     
}
