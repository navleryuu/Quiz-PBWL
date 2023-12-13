@extends('layout.app');

@section('content')
    <div class="card p-4 shadow p-3 mb-5 bg-body-tertiary rounded">

        <h3 style="font-family: 'Arial', sans-serif; color: #333; font-size: 24px; text-align: center; margin-bottom: 10px;">
            Selamat Datang
        </h3>
        <h3 style="font-family: 'Arial', sans-serif; color: #313233; font-size: 28px; font-weight: bold; text-align: center;">
            {{ Auth::user()->name }}
        </h3>
        
        
       
    </div>
@endsection
