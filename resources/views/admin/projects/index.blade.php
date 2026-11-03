<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Web Profile - Data Projects</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
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
                
                <!-- Notifikasi Pesan Sukses -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-normal">Data Projects</h2>
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary px-3">Tambah Project</a>
                </div>

                <div class="content-card">
                    <div class="table-responsive">
                        <table id="projectsTable" class="table table-bordered table-striped align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 50px;">No</th>
                                    <th style="width: 100px;">Image</th>
                                    <th>Title</th>
                                    <th>Teknologi</th>
                                    <th>Description</th>
                                    <th style="width: 90px;">Status</th>
                                    <th style="width: 110px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $index => $project)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('images/' . $project['image']) }}" width="70" class="rounded shadow-sm" alt="Project Image">
                                    </td>
                                    <td>{{ $project['title'] }}</td>
                                    <td>{{ $project['tech'] ?? '-' }}</td>
                                    <td>{{ $project['description'] }}</td>
                                    <td>
                                        <span class="badge {{ ($project['category'] ?? '') == 'Selesai' ? 'bg-success' : 'bg-secondary' }}">
                                            {{ $project['category'] ?? 'Aktif' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-grid gap-1">
                                            <!-- Tombol Edit -->
                                            <a href="{{ route('admin.projects.edit', $index) }}" class="btn btn-warning btn-sm text-dark fw-bold">Edit</a>
                                            
                                            <!-- Tombol Hapus -->
                                            <form action="{{ route('admin.projects.destroy', $index) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm text-white fw-bold w-100">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#projectsTable').DataTable({
                "pageLength": 10,
                "lengthMenu": [5, 10, 25, 50]
            });
        });
    </script>
</body>
</html>