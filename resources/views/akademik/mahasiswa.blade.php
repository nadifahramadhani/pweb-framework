    @extends('akademik.layouts.main')
    @section('title')

    
    @section('content')
    <h1>Daftar Mahasiswa Jurusan TI</h1>

    <h2>Datar Mahasiswa</h2>
  

    <ol>
        <?php
            foreach ($mhs as $namaMhs) {
                echo "<li> $namaMhs</li>";
            }
        ?>
    </ol>
    
    <div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_Politeknik_Negeri_Padang_%282014%29.svg/800px-Logo_Politeknik_Negeri_Padang_%282014%29.svg.png" alt="logo pnp" width="3%" >
        <img src="https://ti.pnp.ac.id/wp-content/uploads/2024/02/web-header02.png" alt="logo ti" width="10%">
    </div>
    <div>
        Padang, &copy; <?= date ("Y") ?> PNP
    </div>
    @endsection
