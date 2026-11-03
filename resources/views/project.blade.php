<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects - Web Profile Sistem Informasi UNPAM</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: Arial, sans-serif; }
        .navbar { background-color: #0d47a1 !important; }
        .card { transition: transform 0.2s ease-in-out; }
        .card:hover { transform: translateY(-5px); }
    </style>
</head>
<body>

    <!-- Navbar Publik -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="{{ route('home') }}">MyProfile SI UNPAM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('projects.frontend') }}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama: Daftar Projects -->
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-4">My Projects</h2>
        <p class="text-center text-muted mb-5">Berikut adalah daftar project dan portofolio pengembangan sistem yang telah kami kerjakan.</p>
        
        <div class="row">
            @forelse($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 200px;">
                            <span>No Image</span>
                        </div>
                    @endif
                    
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-dark">{{ $project->title }}</h5>
                        <p class="text-primary small mb-2 fw-semibold">Tech: {{ $project->teknologi }}</p>
                        <p class="card-text text-muted">{{ Str::limit($project->description, 100) }}</p>
                    </div>
                    
                    <div class="card-footer bg-white border-top-0 pb-3">
                        <!-- Tombol Lihat Detail yang sudah dihubungkan ke route -->
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-outline-primary w-100 fw-semibold">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted fs-5">Belum ada data project yang tersedia saat ini.</p>
            </div>
            @endforelse
        </div>
        
        <!-- Navigasi Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $projects->links() }}
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0 small">&copy; 2026 Sistem Informasi - Universitas Pamulang. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>