<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegisterUsers;

class LatihanJson extends Controller
{
    public function latihanSatu(){
        $data = array(
            "name" => "Gloria Lea Dwi Kurnia",
            "url" => "https://www.google.com",
            "rank" => 1,
            "socialmedia" => [
                "facebook" => "Gloria Lea Dwi Kurnia",
                "twitter" => "glorialea",
                "instagram" => "glorialeaa",
                "youtube" => "Gloria Lea Dwi Kurnia",
                "github" => "glorialea"
            ]
        );
        
        $json = json_encode($data);
        dd($json);
    }

    public function latihanDua(){
        $data = array(
            "first_name" => "Gloria Llea",
            "last_name" => "Dwi Kurnia",
            "location" => "Yogyakarta",
            "online" => true,
            "followers" => 999
        );

        $json = json_encode($data);
        dd($json);
    }

    public function latihanTiga(){
        $data = array(
            "first_name" => "Gloria Lea",
            "last_name" => "Dwi Kurnia",
            "location" => "Ocean",
            "websites" => array (
              [
                "description" => "work",
                "URL" => "https://www.digitalocean.com/"
              ],
              [
                "desciption" => "tutorials",
                "URL" => "https://www.digitalocean.com/community/tutorials"
              ]
            ),
            "social_media" => array(
              [
                "description" => "twitter",
                "link" => "https://twitter.com/digitalocean"
              ],
              [
                "description" => "facebook",
                "link" => "https://www.facebook.com/DigitalOceanCloudHosting"
              ],
              [
                "description" => "github",
                "link" => "https://github.com/digitalocean"
              ]
            )
        );

        $json = json_encode($data);
        dd($json);
    }

    public function latihanEmpat(){
        $data = array(
            "employees"=> [
                [
                    "firstName" => "Gloria", "lastName" => "Lea"
                ],
                [
                    "firstName" => "Anna", "lastName" => "Smith"
                ],
                [
                    "firstName" => "Peter","lastName" => "Jones"
                ]
            ]
        );
        
        $json = json_encode($data);
        dd($json);
    }

    public function latihanLima(){
        $data = array(
                "matapelajaran" => [
                "subject" => "Matematika",
                "kelas" => array (
                    [
                        "X" => "Argo",
                        "Jadwal" => "Senin"
                    ],
                    [
                        "XI" => "JJS",
                        "Jadwal" => "Selasa"
                    ],
                    [
                        "XII" => "Halim",
                        "Jadwal" => "Rabu"
                    ]
                 )
            ]
        );

        $json = json_encode($data);
        dd($json);
    }
}