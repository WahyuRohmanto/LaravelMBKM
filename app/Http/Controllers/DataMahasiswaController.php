<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{
   public function nilaiMahasiswa () {
    $s1 = ['nama'=>'Fawwaz', 'nilai'=>85];
    $s2 = ['nama'=>'Bedu', 'nilai'=>58];
    $s3 = ['nama'=>'Siti', 'nilai'=>95];
    $s4 = ['nama'=>'Deden', 'nilai'=>30];
    $siswa = [$s1, $s2, $s3, $s4];
    $judul= ["No","Nama","Nilai","Keterangan"];
        return view('nilai', compact("siswa" , "judul"));
    }
}