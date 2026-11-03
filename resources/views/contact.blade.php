<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Web Profile Sistem Informasi UNPAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: Arial, sans-serif; }
        .navbar { background-color: #0d47a1 !important; }
    </style>
</head>
<body>

    <!-- Navbar Publik -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="{{ route('home') }}">MyProfile SI UNPAM</a>
            <div class="navbar-nav ms-auto gap-3">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('projects.frontend') }}">Projects</a>
                <a class="nav-link" href="{{ route('about') }}">About</a>
                <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Konten Contact -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="fw-bold mb-4 text-center">Hubungi Kami</h2>
                <div class="card shadow-sm border-0 p-4">
                    <p class="text-muted text-center mb-4">Silakan hubungi kami melalui informasi di bawah ini atau kirimkan pesan.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><strong>Email:</strong> azkasr836@gmail.com</li>
                        <li class="mb-2"><strong>Kampus:</strong> Universitas Pamulang, Tangerang Selatan</li>
                        <li class="mb-2"><strong>Program Studi:</strong> S1 Sistem Informasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0 small">&copy; 2026 Sistem Informasi - Universitas Pamulang. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>