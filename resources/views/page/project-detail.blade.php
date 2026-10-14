@extends('layouts.app')

@section('title', 'Project Detail - ' . $project['title'])

@section('content')
<div class="container flex-grow-1 py-4">
    <div class="mb-4">
        <a href="{{ route('project.index') }}" class="btn btn-danger">Kembali</a>
    </div>
    <div class="row g-4">
        <div class="col-md-5">
            <img src="{{ asset('images/' . $project['image']) }}" alt="" style="min-height: 300px; object-fit: cover;" class="img-fluid h-100 w-100">
        </div>
        <div class="col-md-7">
            <div class="card-body">
                <div class="mb-2">
                    <span class="badge {{ $project['category'] == 'Selesai' ? 'bg-success' : 'bg-warning' }}">{{ $project['category'] }}</span>
                </div>
                <div class="mb-2">
                    <h5 class="card-title fw-bold">{{ $project['title'] }}</h5>
                </div>
                <p class="text-muted card-text">{{ $project['description'] }}</p>
                <div class="mb-2">
                    <small class="text-muted">Tech : {{ $project['tech'] }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection