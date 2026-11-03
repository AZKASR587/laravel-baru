<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Web Profile Sistem Informasi UNPAM</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: Arial, sans-serif; }
        .navbar { background-color: #0d47a1 !important; }
        .profile-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
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
                    <li class="nav-item"><a class="nav-link" href="{{ route('projects.frontend') }}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten About / Profil Section -->
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Judul Utama -->
                <h1 class="display-6 fw-bold mb-4">Halo, Saya Azka Syahmi Ramadhan</h1>

                <!-- Foto Profil (Ganti path gambar jika sudah ada, atau gunakan placeholder/avatar default) -->
                <div class="mb-4">
                    <img src="https://ui-avatars.com/api/?name=Azka+Syahmi+Ramadhan&size=180&background=0d47a1&color=fff" alt="Azka Syahmi Ramadhan" class="profile-img">
                </div>

                <!-- Subtitle / Deskripsi Singkat -->
                <p class="text-muted lead fs-5 mb-3">
                    Saya seorang Web Developer yang passionate dalam membuat aplikasi web modern.
                </p>

                <hr class="w-50 mx-auto my-4">

                <!-- Paragraf Penjelas -->
                <p class="text-secondary mb-4">
                    Selamat datang di portfolio website saya. Saya memiliki pengalaman dalam Laravel, Bootstrap, dan berbagai teknologi web lainnya sebagai mahasiswa Program Studi Sistem Informasi Universitas Pamulang.
                </p>

                <!-- Tombol Aksi -->
                <div>
                    <a href="{{ route('projects.frontend') }}" class="btn btn-primary btn-lg px-4 shadow-sm">Lihat Projects</a>
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