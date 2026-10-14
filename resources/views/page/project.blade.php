@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Daftar Project</h2>
    <div class="row g-4">
        @foreach($projects as $index => $project)
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('images/' . $project['image']) }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-{{ $project['badge_color'] }} mb-2">{{ $project['category'] }}</span>
                        <h5 class="card-title fw-bold">{{ $project['title'] }}</h5>
                        <p class="card-text text-muted">{{ $project['description'] }}</p>
                        <small class="text-muted d-block mb-3">Tech: {{ $project['tech'] }}</small>
                        <a href="{{ route('project.show', $index) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection