<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Menggunakan Bootstrap 5 untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* Background transparan/gelap opsional, bisa diganti sesuai selera */
            background-color: #f4f6f9;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .login-header {
            background-color: #ffc107;
            padding: 20px;
            text-align: center;
            font-weight: bold;
            font-size: 1.25rem;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="card login-card bg-white">
        <!-- Header Kuning "Admin Login" -->
        <div class="login-header">
            Admin Login
        </div>

        <div class="card-body p-4">
            
            <!-- Menampilkan Pesan Error jika Login Gagal -->
            @if ($errors->any())
                <div class="alert alert-danger py-2" role="alert">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Login -->
            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label text-muted small fw-bold">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-muted small fw-bold">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary py-2">Masuk</button>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>