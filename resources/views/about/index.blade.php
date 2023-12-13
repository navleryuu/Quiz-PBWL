@extends('layout.app')

@section('content')
    <div class="card col-12 m-4">
        <div class="card-header text-center mb-2">
            <h3 class="card-title">About</h3>
        </div>
        <div class="card-header text-center">
            <img src="{{ asset('assets/foto.jpg') }}" alt="Foto Profil" class="rounded-circle" width="150" height="150">
        </div>
        <div class="card-header text-center">    
            <p>Nama          : Elvan Dito Siregar</p>
            <p>Kelas/Semester: SI - 1 / V</p>
            <p>NIM: 0702213062</p>
            <p>Mata Kuliah: Pemrograman Web Lanjutan</p>
        </div>
        <div class="card-footer text-center">
            Copyright <b>@</b>By <strong>Elvan Dito Siregar</strong> - 2023
        </div>

    </div>
@endsection