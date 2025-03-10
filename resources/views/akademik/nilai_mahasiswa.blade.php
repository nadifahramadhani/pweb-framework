
@extends('akademik.layouts.main')
@section('title')


@section('content')
    <div class="container">
        @if (($total_nilai >=0) and ($total_nilai <56))
            <div class="alert alert-danger"> Maaf, Anda tidak lulus </div>
        @elseif (($total_nilai>55) and ($total_nilai <=100))
            <div class="alert alert-success"> Selamat, Anda lulus </div>                 
        @endif
        
        <h2>Nilai Mahasiswa</h2>
        <div class="col-md-6">
            <table class="table table-bordered table-striped">
                <tr class="text-md-center">
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Total Nilai</th>
                </tr>

                <tr>
                    <td>{{$nama}}</td>
                    <td>{{$nim}}</td>
                    <td>{{$total_nilai}}</td>

                </tr>

            </table>

        </div>

    </div>
@endsection