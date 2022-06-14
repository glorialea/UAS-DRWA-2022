<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegisterUsers;
use Illuminate\Support\Str;

class KelasController extends Controller
{

    public function getDataKelas(){
        // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
         $ambildata = DB::table('kelas')->get();
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
                                 "DataKelas"=> $ambildata], 200);
         }else {
             return response()->json(["Result"=>
             ["ResultCode"=>0,
             "ResultMassege"=>"User atau password salah"]], 401
             );
         }
 
     }
     
     public function getDataKelasById($idkelas){
         // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
          $ambildata = DB::table('kelas')
          ->where('id_kelas',$idkelas)
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
      public function insertDataKelas (request $request){
         // DB::table('kelas')->insert([
         //     'kelas' => $request->input('kelas'),
         //     'jurusan' => $request->input('jurusan'),
         //     'sub'=> $request->input('sub')
         // ]);
          $arr_kelas = array('kelas' => input('kelas'), 
                             'jurusan' => input('jurusan'), 
                             'sub' => input('sub')
         );
          DB::table('kelas')->insert($arr_kelas);
         
        //   DB::insert('insert into kelas (rfid, nip, nama_guru, alamat, status_guru) values (?,?,?,?,?)', 
        //      [$request->input('rfid'),$request->input('nip'),'nama_guru'=> $request->input('nama_guru'),
        //      'alamat'=> $request->input('alamat'), 1]);
        
         return response()->json(
             ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success Data Masuk Ke Database"
                ]
                ],200
            );
        }
 
      public function updateDataKelas(request $request){
          DB::table('kelas')->where('id_kelas', $request->input('id_kelas'))->update([
              'kelas' => $request->input('kelas'),
              'jurusan' => $request->input('jurusan'),
              'sub'=> $request->input('sub')
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
      
      public function getDataKelasToken(){
         $token = Str::random(60);
         $hash_token = hash('sha256', $token);
         print_r($token);exit;
         // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
          $ambildata1 = DB::table('kelas')->get();
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
                                  "Data Kelas"=> $ambildata1], 250);
          }else {
              return response()->json(["Result"=>
              ["ResultCode"=>0,
              "ResultMassege"=>"User atau password salah"]], 401
              );
          }
  
      }
      public function deleteDataKelas(request $request){
         dd($request->input('id_kelas'));
          DB::table('kelas')->where('id_kelas', $request->input('id_kelas'))->delete();
          
          return response()->json(
             ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success Data Berhasil Dihapus"
                ]
                ],200
            );
      }

      public function deleteDataKelasParam($id){
         dd($id);
         DB::table('kelas')->where('id_kelas', $id)->delete();
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
