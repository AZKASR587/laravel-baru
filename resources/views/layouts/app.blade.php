<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - UNPAM Prodi SI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-dark bg-primary">
        <div class="container">

            <a class="navbar-brand fw-bold" href="/">
                UNPAM - Prodi SI
            </a>

            <div>
                <a href="/" class="text-white text-decoration-none small me-3">
                    Home
                </a>

                <a href="/profile" class="text-white text-decoration-none small me-3">
                    Profile
                </a>

                <a href="/about" class="text-white text-decoration-none small">
                    About
                </a>
            </div>

        </div>
    </nav>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-white border-top text-center py-2">
        <small class="text-muted">
            © 2026 Universitas Pamulang
        </small>
    </footer>

</body>
</html>