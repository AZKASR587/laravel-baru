<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project - Web Profile Sistem Informasi UNPAM</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: Arial, sans-serif; }
        .navbar { background-color: #0d47a1 !important; }
        .project-img { max-height: 400px; width: 100%; object-fit: cover; border-radius: 8px; }
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

    <!-- Konten Detail Project -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-3">
                    <a href="{{ route('projects.frontend') }}" class="btn btn-secondary btn-sm">&larr; Kembali ke Daftar Projects</a>
                </div>

                <div class="card shadow-sm border-0 p-4">
                    <h2 class="fw-bold text-dark mb-3">{{ $project->title }}</h2>
                    
                    <p class="text-muted mb-3">
                        <span class="badge bg-primary fs-6">Teknologi: {{ $project->teknologi }}</span>
                        <span class="badge {{ $project->status == 'active' ? 'bg-success' : 'bg-secondary' }} fs-6 ms-2">Status: {{ $project->status }}</span>
                    </p>

                    @if($project->image)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $project->image) }}" class="project-img shadow-sm" alt="{{ $project->title }}">
                        </div>
                    @endif

                    <h5 class="fw-bold mt-3">Deskripsi Project</h5>
                    <hr>
                    <p class="text-secondary" style="white-space: pre-line; line-height: 1.7;">
                        {{ $project->description }}
                    </p>
                </div>
            </div>
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