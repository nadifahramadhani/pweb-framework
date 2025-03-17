    @extends('akademik.layouts.main')
    @section('title')
    @section('navMhs','active')

    
    @section('content')
    <h1>Daftar Mahasiswa Jurusan TI</h1>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>

        @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa->id }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
        </tr>
        @endforeach
    </table>

    
    <div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_Politeknik_Negeri_Padang_%282014%29.svg/800px-Logo_Politeknik_Negeri_Padang_%282014%29.svg.png" alt="logo pnp" width="3%" >
        <img src="https://ti.pnp.ac.id/wp-content/uploads/2024/02/web-header02.png" alt="logo ti" width="10%">
    </div>
    <div>
        Padang, &copy; <?= date ("Y") ?> PNP
    </div>
    @endsection
