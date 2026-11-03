<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Menyediakan data daftar project untuk halaman index.
     */
    private function getProjectsData()
    {
        return [
            [
                'title'       => 'Sistem Informasi Akademik',
                'category'    => 'Selesai',
                'badge_color' => 'secondary',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa...',
                'tech'        => 'Laravel & Bootstrap',
                'image'       => 'project1.jpg'
            ],
            [
                'title'       => 'E-commerce SEO Optimization',
                'category'    => 'Selesai',
                'badge_color' => 'secondary',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing...',
                'tech'        => 'PHP & Google Search Console',
                'image'       => 'project2.jpg'
            ],
            [
                'title'       => 'Redesign Cover & Branding',
                'category'    => 'Selesai',
                'badge_color' => 'secondary',
                'description' => 'Perancangan element grafis personal dan design sampul...',
                'tech'        => 'Figma & Canva',
                'image'       => 'project3.jpg'
            ],
            [
                'title'       => 'Audit & Monitoring SEO Web',
                'category'    => 'Selesai',
                'badge_color' => 'success',
                'description' => 'Analisis performa halaman web dan peningkatan indeks mesin pencari...',
                'tech'        => 'PHP & Google Analytics',
                'image'       => 'project4.jpg'
            ],
            [
                'title'       => 'Sistem Inventaris Kampus',
                'category'    => 'Selesai',
                'badge_color' => 'success',
                'description' => 'Pengelolaan sarana dan prasarana barang inventaris kampus secara terintegrasi...',
                'tech'        => 'Laravel & Livewire',
                'image'       => 'project5.jpg'
            ],
            [
                'title'       => 'Hunian Nyaman & Terjangkau',
                'category'    => 'Selesai',
                'badge_color' => 'success',
                'description' => 'Platform informasi properti dan pencarian hunian minimalis...',
                'tech'        => 'Laravel & Tailwind',
                'image'       => 'project6.jpg'
            ],
            [
                'title'       => 'Aplikasi Manajemen Keuangan',
                'category'    => 'Selesai',
                'badge_color' => 'secondary',
                'description' => 'Pencatatan pemasukan dan pengeluaran keuangan pribadi/usaha...',
                'tech'        => 'Vue.js & Laravel API',
                'image'       => 'project7.jpg'
            ],
            [
                'title'       => 'Company Profile UMKM',
                'category'    => 'Selesai',
                'badge_color' => 'secondary',
                'description' => 'Website profil bisnis lokal untuk memperluas jangkauan pasar...',
                'tech'        => 'HTML, CSS & JavaScript',
                'image'       => 'project8.jpg'
            ],
            [
                'title'       => 'Sistem Manajemen Tugas (Task App)',
                'category'    => 'Dalam Proses',
                'badge_color' => 'secondary',
                'description' => 'Aplikasi kolaborasi tim untuk manajemen tugas harian...',
                'tech'        => 'React & Node.js',
                'image'       => 'project9.jpg'
            ],
            [
                'title'       => 'Dashboard Analitik Penjualan',
                'category'    => 'Selesai',
                'badge_color' => 'success',
                'description' => 'Visualisasi data grafik penjualan produk secara real-time...',
                'tech'        => 'Laravel & Chart.js',
                'image'       => 'project10.jpg'
            ]
        ];
    }

    // Fungsi untuk halaman publik (Frontend)
    public function indexPublic()
    {
        $projects = $this->getProjectsData();
        return view('page.project', compact('projects'));
    }

    // Fungsi untuk halaman admin (Tabel CRUD)
    public function index()
    {
        $projects = $this->getProjectsData();
        return view('admin.projects.index', compact('projects'));
    }

    public function show($id)
    {
        $projects = $this->getProjectsData();

        if (!isset($projects[$id])) {
            abort(404, 'Project tidak ditemukan');
        }

        $project = $projects[$id];

        return view('page.project-detail', compact('project'));
    }

    // Tambahkan fungsi create untuk halaman tambah data
    public function create()
    {
        return view('admin.projects.create'); // Pastikan view form create nanti dibuat jika diperlukan
    }

    // Tambahkan fungsi edit untuk menangani tombol Edit
    public function edit($id)
    {
        $projects = $this->getProjectsData();

        if (!isset($projects[$id])) {
            abort(404, 'Project tidak ditemukan');
        }

        $project = $projects[$id];

        // Untuk sementara arahkan ke view edit atau tampilkan data terkait
        return view('admin.projects.edit', compact('project', 'id'));
    }

    // Tambahkan fungsi update untuk menyimpan perubahan data
    public function update(Request $request, $id)
    {
        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diperbarui!');
    }

    // Tambahkan fungsi destroy untuk menghapus data
    public function destroy($id)
    {
        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus!');
    }
}