<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Web Profile - Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; font-family: Arial, sans-serif; }
        .top-navbar { background-color: #ffc107; padding: 10px 20px; }
        .sidebar { min-height: calc(100vh - 60px); background-color: #343a40; color: #fff; }
        .sidebar h5 { color: #fff; padding: 15px; font-size: 1.1rem; margin: 0; border-bottom: 1px solid #4f5962; }
        .sidebar .nav-link { color: #c2c7d0; padding: 12px 20px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { color: #fff; background-color: rgba(255, 255, 255, 0.1); }
        .content-card { background: #ffffff; border-radius: 8px; padding: 25px; box-shadow: 0 0 10px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

    <!-- Top Navbar -->
    <nav class="top-navbar d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-2">
            <span class="d-block fw-bold text-uppercase" style="font-size: 16px; color: #0d47a1;">UNIVERSITAS PAMULANG - SISTEM INFORMASI</span>
        </div>
        <div class="d-flex align-items-center gap-3 me-3">
            <a href="{{ route('admin.dashboard') }}" class="nav-link text-dark fw-semibold">Dashboard</a>
            
            <!-- Tombol Logout menggunakan Form POST yang benar -->
            <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-link nav-link text-dark fw-semibold p-0" style="text-decoration: none;">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 p-0 sidebar">
                <h5 class="fw-semibold">Admin Menu</h5>
                <ul class="nav flex-column mt-2">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.projects.index') }}">Data Project</a></li>
                </ul>
            </div>

            <!-- Main Content -->
            <main class="col-md-10 p-4">
                <h2 class="fw-normal mb-4">Admin Dashboard</h2>
                <div class="content-card">
                    <h4>Selamat Datang di Panel Admin Web Profile Sistem Informasi UNPAM!</h4>
                    <p class="text-muted">Gunakan menu di sebelah kiri untuk mengelola data project dan portofolio website Anda.</p>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>