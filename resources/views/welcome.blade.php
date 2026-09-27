<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UNPAM - Prodi SI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">

            <a href="{{ url('/') }}" class="navbar-brand fw-bold">
                UNPAM - Prodi SI
            </a>

            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/profile') }}" class="nav-link">
                            Profile
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/about') }}" class="nav-link">
                            About
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    <!-- CONTENT -->
    <div class="container flex-grow-1">

        <div class="row mt-4">

            <div class="col-md-12">

                <h2 class="display-5 text-primary">
                    Selamat Datang
                </h2>

                <p class="text-muted">
                    ini adalah halaman utama project web profile prodi SI unpam
                </p>

                <!-- TOMBOL LIHAT DETAIL -->
                <a href="{{ url('/profile') }}"
                    class="btn btn-success">

                    Lihat Detail

                </a>

            </div>

        </div>

    </div>


    <!-- FOOTER -->
    <footer class="bg-white border-top py-3">

        <div class="container text-center">

            <p class="text-muted small mb-0">
                &copy; {{ date('Y') }} Universitas Pamulang
            </p>

        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>