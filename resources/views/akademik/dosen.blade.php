@extends('akademik.layouts.main')

@section('title', 'Data Dosen')
@section('navDosen', 'active')

@section('content')
    <h1>Daftar Dosen</h1>
    <ol>
        @forelse ($dsn as $namaDosen)
            <li>{{ $namaDosen }}</li>
        @empty
            <div class="alert alert-warning d-inline-block">
                Data tidak ada. Silahkan isi array untuk data dosen!
            </div>
        @endforelse
    </ol>
@endsection
