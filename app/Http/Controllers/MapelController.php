<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegisterUsers;
use Illuminate\Support\Str;

class MapelController extends Controller
{
    public function getDataMapel(){
        // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
         $ambildata = DB::table('mapel')->get(); 
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
                                 "Data Mapel"=> $ambildata], 200);
         }else {
             return response()->json(["Result"=>
             ["ResultCode"=>0,
             "ResultMassege"=>"User atau password salah"]], 401
             );
         }
 
     }
     
     public function getDataMapelById($idkelas){
         // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
          $ambildata = DB::table('mapel')
          ->where('id_mapel',$idmapel)
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
      public function insertDataMapel (request $request){
         // DB::table('kelas')->insert([
         //     'kelas' => $request->input('kelas'),
         //     'jurusan' => $request->input('jurusan'),
         //     'sub'=> $request->input('sub')
         // ]);
          $arr_mapel = array('nama_mapel' => input('nama_mapel'), 
                             'deskripsi' => input('deskripsi')
                             
         );
          DB::table('mapel')->insert($arr_mapel);
         
         return response()->json(
             ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success Data Masuk Ke Database"
                ]
                ],200
            );
        }
 
      public function updateDataMapel(request $request){
          DB::table('mapel')->where('id_mapel', $request->input('id_mapel'))->update([
              'nama_mapel' => $request->input('nama_mapel'),
              'deskripsi' => $request->input('deskripsi')
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
      
      public function getDataMapelToken(){
         $token = Str::random(60);
         $hash_token = hash('sha256', $token);
         print_r($token);exit;
         // $ambildata = DB::table('kelas')->first(); --> first(cmn nampilin yg pertama)
          $ambildata1 = DB::table('mapel')->get();
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
      public function deleteDataMapel(request $request){
         dd($request->input('id_mapel'));
          DB::table('mapel')->where('id_mapel', $request->input('id_mapel'))->delete();
          
          return response()->json(
             ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success Data Berhasil Dihapus"
                ]
                ],200
            );
      }

      public function deleteDataMapelParam($id){
         dd($id);
         DB::table('mapel')->where('id_mapel', $id)->delete();
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
