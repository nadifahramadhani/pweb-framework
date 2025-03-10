<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $arrMhs=['Cipah Ramadhani','Nadifahrdn','Nadifah Ramadhani','COBA COBA','cipah Manies',];
        return view('akademik.mahasiswa',['mhs'=>$arrMhs]);
    }
    
    public function show()
    {
        $nama='Taylor Otwell';
        $nim= '2311082033';
        $total_nilai = 80;
        return view ('akademik.nilai_mahasiswa', compact ('nama','nim','total_nilai'));
    }
}
