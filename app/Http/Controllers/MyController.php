<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MyController;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce(){
        $data = [
            "nama" => "Paujan",
            "alamat" => "Bandung",
            "agama" => "Islam",
            "jk" => "Laki-laki",
            "hobi" => [
                "Makan", "Tidur", "Main",
            ],
        ];
        return view('latihan.perkenalan', compact('data'));
    }

    public function animals(){
        $animal = [
            "Lion", "Crocodile", "Rabbit", "Eagle"
        ];
        return view('latihan.animal', ['hewan'=> $animal]);
    }
}
