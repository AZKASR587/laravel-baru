<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Project - UNPAM</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Memanggil Header Navbar dari folder partials -->
    @include('partials.header')

    <div class="container py-4">
        <!-- Judul Section -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">Portofolio Project</h2>
            <p class="text-muted">Daftar Project yang pernah dikerjakan oleh Mahasiswa</p>
        </div>

        <!-- Grid Card Project -->
        <div class="row g-4">
            
            @foreach($projects as $p)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/' . $p['image']) }}" class="card-img-top" alt="{{ $p['title'] }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <span class="badge {{ $p['badge_color'] }} mb-2 align-self-start">{{ $p['category'] }}</span>
                        <h5 class="card-title fw-bold">{{ $p['title'] }}</h5>
                        <p class="card-text text-muted small">{{ $p['description'] }}</p>
                        <p class="text-secondary small mb-3">Tech : {{ $p['tech'] }}</p>
                        
                        <div class="mt-auto">
                            <a href="#" class="btn btn-primary w-100">Detail Project</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>