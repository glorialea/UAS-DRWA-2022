<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegisterUsers;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    public function getDataGuru(){
        // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
         $ambildata = DB::table('guru')->get(); 
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
     
     public function getDataGuruById($idguru){
         // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
          $ambildata = DB::table('guru')
          ->where('id_guru',$idguru)
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
      public function insertDataGuru (request $request){
         // DB::table('kelas')->insert([
         //     'kelas' => $request->input('kelas'),
         //     'jurusan' => $request->input('jurusan'),
         //     'sub'=> $request->input('sub')
         // ]);
          $arr_guru = array('rfid' => input('rfid'), 
                             'nip' => input('nip'), 
                             'nama_guru' => input('nama_guru'), 
                             'alamat' => input('alamat'), 
                             'status_guru' => input('status_guru') 
                             
         );
          DB::table('guru')->insert($arr_guru);
         
         return response()->json(
             ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success Data Masuk Ke Database"
                ]
                ],200
            );
        }
 
      public function updateDataGuru(request $request){
          DB::table('guru')->where('id_guru', $request->input('id_guru'))->update([
              'rfid' => $request->input('rfid'),
              'nip' => $request->input('nip'),
              'nama_guru' => $request->input('nama_guru'),
              'alamat' => $request->input('alamat'),
              'status_guru' => $request->input('status_guru')
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
      
      public function getDataGuruToken(){
         $token = Str::random(60);
         $hash_token = hash('sha256', $token);
         print_r($token);exit;
         // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
          $ambildata1 = DB::table('guru')->get();
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
      public function deleteDataGuru(request $request){
         dd($request->input('id_guru'));
          DB::table('guru')->where('id_guru', $request->input('id_guru'))->delete();
          
          return response()->json(
             ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success Data Berhasil Dihapus"
                ]
                ],200
            );
      }

      public function deleteDataGuruParam($id){
         dd($id);
         DB::table('guru')->where('id_guru', $id)->delete();
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
