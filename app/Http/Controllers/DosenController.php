<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dosen()
    {
        $arrDosen=['Ronal Hadi','Deni S','Fazrol R','Deddy P','Ervan A','Cipto P'];
        return view('akademik.dosen',['dsn' => $arrDosen]);
    }

    public function prodi()
    {
        return view('akademik.prodi');
        
    }
}
