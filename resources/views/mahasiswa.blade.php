<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <nav class="navbar navbar-dark bg-primary shadow-sm mb-4">
        <div class="contianer">
            <a href="#" class="navbar-brand fw-bold">UNPAM - Profile Mahasiswa</a>
        </div>
    </nav>
    <div class="container flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-white text-center py-4">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('images/PASS-FFOTO.png') }}" alt=""
                                style="width: 120px; height: 120px; object-fit: cover;"
                                class="rounded-circle img-thumbnail shadow-sm">
                        </div>
                        <h5 class="card-title mb-0">Profile Mahasiswa</h5>
                    </div>
                    <div class="card-body text-center">
                        <p><strong>Nama:</strong> {{ $mahasiswa['nama'] }}</p>
                        <p><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</p>
                        <p><strong>Jurusan:</strong> {{ $mahasiswa['prodi'] }}</p>
                        <p><strong>Email:</strong> {{ $mahasiswa['kampus'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-white border-top py-3 mt-5">
        <div class="container text-center">
            <p class="text-muted small mb-0">&copy; {{ date('Y') }} Universitas Pamulang</p>
        </div>
    </footer>
</body>

</html>