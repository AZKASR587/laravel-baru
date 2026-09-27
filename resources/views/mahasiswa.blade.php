<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNPAM - Prodi SI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <!-- Navbar (Ditambahkan position-relative z-3) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4 position-relative z-3">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand fw-bold">UNPAM - Prodi SI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/profile') }}" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about') }}" class="nav-link">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content (Ditambahkan position-relative z-1) -->
    <div class="container flex-grow-1 position-relative z-1">
        <!-- Hero Section -->
        <div class="row justify-content-center text-center mb-4">
            <div class="col-md-8">
                <h2 class="display-5 text-primary">Selamat Datang</h2>
                <p class="text-muted">Ini adalah halaman utama project profile prodi SI UNPAM</p>
            </div>
        </div>

        <!-- Card Mahasiswa (Akan tampil jika data $mahasiswa dikirim) -->
        @if(isset($mahasiswa))
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0 text-center">Profile Mahasiswa</h5>
                    </div>
                    <div class="card-body text-center">
                        <p><strong>Nama:</strong> {{ $mahasiswa['nama'] }}</p>
                        <p><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</p>
                        <p><strong>Jurusan:</strong> {{ $mahasiswa['prodi'] }}</p>
                        <p><strong>Kampus:</strong> {{ $mahasiswa['kampus'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="bg-white border-top py-3 mt-5">
        <div class="container text-center">{{ date('Y') }} Universitas Pamulang</p>
        </div>
    </footer>
</body>

</html>