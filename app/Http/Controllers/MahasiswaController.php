<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    // public function index()
    // {
    //     $arrMhs=['Cipah Ramadhani','Nadifahrdn','Nadifah Ramadhani','COBA COBA','cipah Manies',];
    //     return view('akademik.mahasiswa',['mhs'=>$arrMhs]);
    // }
    
    // public function show()
    // {
    //     $nama='Taylor Otwell';
    //     $nim= '2311082033';
    //     $total_nilai = 80;
    //     return view ('akademik.nilai_mahasiswa', compact ('nama','nim','total_nilai'));
    // }

    public function insertSql(){
        $query=DB::insert("INSERT INTO mahasiswas (nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) values ('2311082033','Nadifah Ramadhani','Padang','2004-10-24','nadifah@gmail.com','TRPL','Komp Cimpago Permai 2',now(),now())"); 
    }

    public function insertPrepared(){
        $query=DB::insert("INSERT INTO mahasiswas (nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) values (?,?,?,?,?,?,?,?,?)", ['2311081042','Zikry','Padang','2006-01-16','zikry@gmail.com','TRPL','Komp Kapuih',now(),now()]); 
    } 

    public function insertBinding(){

        $query = DB::insert("INSERT INTO mahasiswas(nim, nama_lengkap, tempat_lahir, 
        tgl_lahir, email, prodi, alamat, created_at, updated_at) 
        VALUES (:nim, :nama_lengkap, :tempat_lahir, :tgl_lahir, :email, :prodi, 
        :alamat, :created_at, :updated_at)", 
        
        
        [
            'nim'=>'231108111',
            'nama_lengkap'=>'Siapa',
            'tempat_lahir'=>'Payakumbuh',
            'tgl_lahir'=>'2006-12-16',
            'email'=>'Siapa@gmail.com',
            'prodi'=>'MI',
            'alamat'=>'KOMP CAHAYA',
            'created_at'=>now(),
            'updated_at'=>now()
        ]); 
    } 

    public function update()
    {
        $query=DB::update("UPDATE mahasiswas SET tempat_lahir = 'SEATTLE' WHERE nama_lengkap=?", ['Siapa']);
    }

    public function delete()
    {
        $query=DB::delete("DELETE from mahasiswas WHERE nama_lengkap=?",['Siapa']);
    }

    public function select(){
        $query=DB::select("SELECT * FROM mahasiswas");
        dd($query);
    }

    public function selectTampil(){
        $query=DB::select("SELECT * FROM mahasiswas");
        echo ($query[0]->id) . "<br/>";
        echo ($query[0]->nim) . "<br/>";
        echo ($query[0]->nama_lengkap) . "<br/>";
        echo ($query[0]->email) . "<br/>";
        echo ($query[0]->alamat) . "<br/>";

    }

    public function selectView(){
        $query=DB::select("SELECT * FROM mahasiswas");
        return view ('akademik.mahasiswa',['mahasiswas'=>$query]);
    }

    public function selectWhere(){
        $query=DB::select("SELECT * FROM mahasiswas WHERE prodi=? ORDER BY nim ASC",['TRPL']);
        return view ('akademik.mahasiswa',['mahasiswas'=>$query]);
    }

    public function statement(){
        $query=DB::statement("TRUNCATE mahasiswas");
        return ('Tabel mahasiswa sudah kosong');
    }



    


    



}
