<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegisterUsers;
use Illuminate\Support\Str;

class PresensiMengajarController extends Controller
{
    public function getDataPresensiMengajar(){
        // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
         $ambildata = DB::table('presensi_mengajar')->get(); 
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
     
     public function getDataPresensiMengajarById($idpresensiharian){
         // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
          $ambildata = DB::table('presensi_mengajar')
          ->where('id_presensi_mengajar',$idpresensimengajar)
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
      public function insertDataPresensiMengajar (request $request){
         // DB::table('kelas')->insert([
         //     'kelas' => $request->input('kelas'),
         //     'jurusan' => $request->input('jurusan'),
         //     'sub'=> $request->input('sub')
         // ]);
          $arr_PresensiHarian = array('id_jadwal_guru' => input('id_jadwal_guru'), 
                             'tanggal' => input('tanggal'), 
                             'jam_mulai' => input('jam_mulai'), 
                             'jam_selesai' => input('jam_selesai'),
                             'metode' => input('metode'),
                             'keterangan' => input('keterangan')    
                             
         );
          DB::table('presensi_mengajar')->insert($arr_PresensiMengajar);
         
         return response()->json(
             ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success Data Masuk Ke Database"
                ]
                ],200
            );
        }
 
      public function updateDataPresensiMengajar(request $request){
          DB::table('presensi_mengajar')->where('id_presensi_mengajar', $request->input('id_presensi_mengajar'))->update([
              'id_jadwal_guru' => $request->input('id_jadwal_guru'),
              'tanggal' => $request->input('tanggal'),
              'jam_mulai' => $request->input('jam_mulai'),
              'jam_selesai' => $request->input('jam_selesai'),
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
      
      public function getDataPresensiMengajarToken(){
         $token = Str::random(60);
         $hash_token = hash('sha256', $token);
         print_r($token);exit;
         // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
          $ambildata1 = DB::table('presensi_mengajar')->get();
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
         dd($request->input('id_presensi_mengajar'));
          DB::table('presensi_mengajar')->where('id_presensi_mengajar', $request->input('id_presensi_mengajar'))->delete();
          
          return response()->json(
             ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success Data Berhasil Dihapus"
                ]
                ],200
            );
      }

      public function deleteDataPresensiMengajarParam($id){
         dd($id);
         DB::table('presensi_mengajar')->where('id_presensi_mengajar', $id)->delete();
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
