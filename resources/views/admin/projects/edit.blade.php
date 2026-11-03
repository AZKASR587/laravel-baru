<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Web Profile - Edit Project</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; font-family: Arial, sans-serif; }
        .top-navbar { background-color: #ffc107; padding: 10px 20px; }
        .sidebar { min-height: calc(100vh - 60px); background-color: #343a40; color: #fff; }
        .sidebar h5 { color: #fff; padding: 15px; font-size: 1.1rem; margin: 0; border-bottom: 1px solid #4f5962; }
        .sidebar .nav-link { color: #c2c7d0; padding: 12px 20px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { color: #fff; background-color: rgba(255, 255, 255, 0.1); }
        .form-card { background: #ffffff; border-radius: 8px; padding: 25px; box-shadow: 0 0 10px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

    <!-- Top Navbar -->
    <nav class="top-navbar d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-2">
            <span class="d-block fw-bold text-uppercase" style="font-size: 16px; color: #0d47a1;">UNIVERSITAS PAMULANG - SISTEM INFORMASI</span>
        </div>
        <div class="d-flex align-items-center gap-3 me-3">
            <a href="{{ route('admin.dashboard') }}" class="nav-link text-dark fw-semibold text-decoration-none">Dashboard</a>
            
            <!-- Tombol Logout menggunakan Form POST yang benar -->
            <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-link nav-link text-dark fw-semibold p-0 text-decoration-none" style="border: none; background: none;">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 p-0 sidebar">
                <h5 class="fw-semibold">Admin Menu</h5>
                <ul class="nav flex-column mt-2">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('admin.projects.index') }}">Data Project</a></li>
                </ul>
            </div>

            <!-- Main Content -->
            <main class="col-md-10 p-4">
                <h2 class="fw-normal mb-4">Edit Data Project</h2>

                <div class="form-card col-md-8">
                    <form action="{{ route('admin.projects.update', $id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold">Judul Project (Title)</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project['title'] ?? '') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="teknologi" class="form-label fw-semibold">Teknologi</label>
                            <input type="text" class="form-control" id="teknologi" name="teknologi" value="{{ old('teknologi', $project['tech'] ?? '') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label fw-semibold">Upload Gambar Baru (Opsional)</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if(isset($project['image']) && $project['image'])
                                <div class="mt-2">
                                    <span class="small text-muted">Gambar saat ini:</span><br>
                                    <img src="{{ asset('images/' . $project['image']) }}" width="100" class="rounded mt-1 shadow-sm">
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $project['description'] ?? '') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label fw-semibold">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="Selesai" {{ old('status', $project['category'] ?? '') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="Dalam Proses" {{ old('status', $project['category'] ?? '') == 'Dalam Proses' ? 'selected' : '' }}>Dalam Proses</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>