<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Web Profile - Tambah Project</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }
        .top-navbar {
            background-color: #ffc107;
            padding: 10px 20px;
        }
        .top-navbar .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .top-navbar img {
            height: 40px;
        }
        .sidebar {
            min-height: calc(100vh - 60px);
            background-color: #343a40;
            color: #fff;
        }
        .sidebar h5 {
            color: #fff;
            padding: 15px;
            font-size: 1.1rem;
            margin: 0;
            border-bottom: 1px solid #4f5962;
        }
        .sidebar .nav-link {
            color: #c2c7d0;
            padding: 12px 20px;
        }
        .sidebar .nav-link:hover, 
        .sidebar .nav-link.active {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .form-card {
            background: #ffffff;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

    <!-- Top Navbar -->
    <nav class="top-navbar d-flex justify-content-between align-items-center">
        <div class="logo-container">
            <img src="/images/logo unpam.png" alt="UNPAM Logo">
            <div>
                <span class="d-block fw-bold text-uppercase" style="font-size: 11px; color: #1a252f;">UNIVERSITAS PAMULANG</span>
                <span class="d-block fw-bold text-uppercase" style="font-size: 16px; color: #0d47a1;">SISTEM INFORMASI</span>
            </div>
        </div>
        <div class="d-flex align-items-center gap-3 me-3">
            <a href="#" class="nav-link text-white fw-semibold">Dashboard</a>
            <a href="#" class="nav-link text-white fw-semibold">Logout</a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar (Admin Menu) -->
            <div class="col-md-2 p-0 sidebar">
                <h5 class="fw-semibold">Admin Menu</h5>
                <ul class="nav flex-column mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.projects.index') }}">Data Project</a>
                    </li>
                </ul>
            </div>

            <!-- Main Content Area -->
            <main class="col-md-10 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-normal">Tambah Data Project</h2>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary btn-sm px-3">Kembali</a>
                </div>

                <!-- Form Card -->
                <div class="form-card col-md-8">
                    
                    <!-- Menampilkan Error Validasi jika ada -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold">Judul Project (Title)</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Contoh: Sistem ERP" required>
                        </div>

                        <div class="mb-3">
                            <label for="teknologi" class="form-label fw-semibold">Teknologi</label>
                            <input type="text" class="form-control" id="teknologi" name="teknologi" value="{{ old('teknologi') }}" placeholder="Contoh: PHP, Laravel" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label fw-semibold">Upload Gambar (Image)</label>
                            <input type="file" class="form-control" id="image" name="image">
                            <div class="form-text">Format: JPG, PNG, JPEG (Maks. 2MB)</div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Tuliskan deskripsi singkat project..." required>{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label fw-semibold">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary px-4">Simpan Project</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>