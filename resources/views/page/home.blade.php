@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container flex-grow-1">
    <div class="row">
        <div class="col-md-12">
            <h2 class="display-5 text-primary mt-5">
                Selamat Datang
            </h2>

            <p class="text-muted">
                Ini adalah halaman utama project web Prodi Sistem Informasi.
            </p>

            <a href="{{ url('/profile') }}" class="btn btn-success">
                Lihat Profile
            </a>
        </div>
    </div>
</div>
@endsection