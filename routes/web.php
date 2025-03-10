<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MahasiswaController;
use  App\Http\Controllers\DosenController;


// Route::get('/profil', function () {
//    echo '<h1>Profil</h1>';
//    return '<p>Jurusan Tekonologi Informasi POliteknik Negeri Padang</p>';

// });

// Route::get('/mahasiswa/ti/udin', function () {
//    echo "<p style='font-size:40;color:blue'>Jurusan Teknologi Informasi </p>";
//    echo '<h1>Selamat Datang Cipah...</h1>';
//    echo '<hr>';
//    echo  '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nisi saepe, voluptatibus doloribus dolor natus unde fuga itaque suscipit aperiam incidunt accusantium nesciunt sit corrupti modi delectus tempora deleniti velit.</p>';

   

// });


// Route::get('/mahasiswa/{nama}',function($nama) {
//     return '<p>Ketua HIMA Jurusan TI adalah <b>'.$nama.'</b></p>';
 
//  });

//  Route::get('/mahasiswa/{nama}/{nim}',function($nama,$nim) {
//     return '<p>Ketua HIMA Jurusan TI adalah <b>'.$nama.'</b> dengan Nim = '.$nim.'</p>';
 
//  });

//  Route::get('/dosen/{nama}/{nip?}',function($a='admin',$b='202200001') {
//     return '<p>Dosen Pembina HIMA Jurusan TI adalah <b>'.$a.'</b> dengan Nip = '.$b.'</p>';
 
//  });

//  Route::get('user/{id}', function ($id) {
//      return '<p>User Admin mememiliki id <b>'.$id.'</b></p>';
//  }) ->where('id','[0-9]+');

//  Route::get('/buku-tamu', function () {
//     return '<h2>Buku Tamu</h2>';
    
//  });
//  Route::redirect('/guest-book', '/buku-tamu');

//  Route::prefix('/login')->group(function(){
//     Route::get('/', function () {
//         return view('dashboard');
//     });
    
//     Route::get('/home', function () {
//         return view('home');
//     });
    
//     Route::get('/admin', function () {
//         return view('login');
//     });
//  });

 Route::fallback(function(){
    return '<h2>MAAF HALAMAN INI TIDAK DITEMUKAN</h2>';
 });

// Route::get('/mahasiswa', function () {
//    return view('mahasiswa');
    
// });

// Route::get('/mahasiswa2', function () {
//    $arrMhs=[
//       'mhs1' => 'Cipah view',
//       'mhs2' => 'Linus Benedict',
//       'mhs3' => 'Nadifah Ramadhani',
//       'mhs4' => 'Elon Musk',
//       'mhs5' => 'cipah Manies',
//    ];
//     return view('akademik.mahasiswa',$arrMhs);
// });


// Route::get('/mahasiswa2', function () {
// $arrMhs=['Cipah Ramadhani','Nadifahrdn','Nadifah Ramadhani','COBA COBA','cipah Manies',
//    ];
//     return view('akademik.mahasiswa',['mhs'=>$arrMhs]);
// });
// Route::get('/nilai_mahasiswa', function () {
//    $nama='Taylor Otwell';
//    $nim= '2311082033';
//    $total_nilai = 80;
//    return view ('akademik.nilai_mahasiswa', compact ('nama','nim','total_nilai'));

    
// });

// Route::get('/nilai_mahasiswa_if', function () {
//    $nama='Taylor Otwell';
//    $nim= '2311082033';
//    $total_nilai = 80;
//    return view ('akademik.if_else_nilai_mahasiswa', compact ('nama','nim','total_nilai'));

    
// });

// Route::get('/perulangan', function () {
//    $nama='Taylor Otwell';
//    $nim= '2311082033';
//    $total_nilai = [80,70,30,60,45];
//    return view ('akademik.perulangan', compact ('nama','nim','total_nilai'));

    
// });

Route::get('/mahasiswa', function () {
   $arrMhs=['Bill Gates','Elon Musk','Nadifah Ramadhani','Zikry','tya','Yola'];
   return view('akademik.mahasiswa',['mhs' => $arrMhs]);

    
});

// Route::get('/dosen', function () {
//    $arrDosen=['Ronal Hadi','Deni S','Fazrol R','Deddy P','Ervan A','Cipto P'];
//    return view('akademik.dosen',['dsn' => $arrDosen]);

    
// });

// Route::get('/prodi', function () {
//     return view('akademik.prodi');
// });

Route::get('/home', function () {
   return view('akademik.home');
});

Route::get('/mahasiswa-controller', [MahasiswaController::class, 'index']);

Route::get('/mahasiswa-show', [MahasiswaController::class, 'show']);

Route::get('/dosen', [DosenController::class,'dosen']);
Route::get('/prodi', [DosenController::class,'prodi']);