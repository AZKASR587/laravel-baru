<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sistem Informasi UNPAM</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        /* Header Kuning UNPAM */
        .header-unpam {
            background-color: #ffc107;
            padding: 12px 25px;
            font-weight: bold;
            border-bottom: 1px solid #e0a800;
        }
        /* Sidebar Gelap */
        .sidebar {
            background-color: #343a40;
            min-height: calc(100vh - 55px);
            color: white;
            padding-top: 20px;
        }
        .sidebar h5 {
            font-size: 1rem;
            padding-left: 20px;
            color: #adb5bd;
            margin-bottom: 15px;
        }
        .sidebar a {
            color: #ced4da;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            transition: 0.2s;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #495057;
            color: white;
        }
    </style>
</head>
<body>

<!-- Header Atas Kuning UNPAM -->
<div class="header-unpam d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center gap-2">
        <span>🟡</span>
        <span>UNIVERSITAS PAMULANG <br><small style="font-size: 0.75rem;">SISTEM INFORMASI</small></span>
    </div>
    <div style="font-size: 0.9rem;">
        <span class="me-3">Halo, Administrator</span>
        <a href="#" class="text-dark text-decoration-none fw-bold">Logout</a>
    </div>
</div>

<div class="container-fluid p-0">
    <div class="row g-0">
        <!-- Sidebar Kiri -->
        <div class="col-md-2 sidebar">
            <h5>Admin Menu</h5>
            <a href="{{ route('admin.dashboard') }}" class="active">Dashboard</a>
            <a href="{{ route('projects.index') }}">Data Project</a>
        </div>

        <!-- Konten Utama Dashboard -->
        <div class="col-md-10 p-4">
            <h3 class="fw-bold mb-4">Dashboard</h3>
            
            <div class="card shadow-sm border-0 p-4">
                <h5 class="fw-bold text-secondary">Selamat datang di panel kontrol administrator.</h5>
                <p class="text-muted mb-0">Gunakan menu di sebelah kiri untuk mengelola data project sistem informasi Universitas Pamulang.</p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>