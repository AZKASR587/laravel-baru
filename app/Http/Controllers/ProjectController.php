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
                'badge_color' => 'warning',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa...',
                'tech'        => 'Laravel & Bootstrap',
                'image'       => 'project1.jpg'
            ],
            [
                'title'       => 'E-commerce SEO Optimization',
                'category'    => 'Selesai',
                'badge_color' => 'warning',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing...',
                'tech'        => 'PHP & Google Search Console',
                'image'       => 'project2.jpg'
            ],
            [
                'title'       => 'Redesign Cover & Branding',
                'category'    => 'Selesai',
                'badge_color' => 'warning',
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
                'badge_color' => 'warning',
                'description' => 'Pencatatan pemasukan dan pengeluaran keuangan pribadi/usaha...',
                'tech'        => 'Vue.js & Laravel API',
                'image'       => 'project7.jpg'
            ],
            [
                'title'       => 'Company Profile UMKM',
                'category'    => 'Selesai',
                'badge_color' => 'warning',
                'description' => 'Website profil bisnis lokal untuk memperluas jangkauan pasar...',
                'tech'        => 'HTML, CSS & JavaScript',
                'image'       => 'project8.jpg'
            ],
            [
                'title'       => 'Sistem Manajemen Tugas (Task App)',
                'category'    => 'Dalam Proses',
                'badge_color' => 'warning',
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

    public function index()
    {
        $projects = $this->getProjectsData();

        return view('page.project', compact('projects'));
    }

    public function show($id)
    {
        $projects = $this->getProjectsData();

        // Memeriksa apakah data project dengan indeks tersebut ada
        if (!isset($projects[$id])) {
            abort(404, 'Project tidak ditemukan');
        }

        $project = $projects[$id];

        return view('page.project-detail', compact('project'));
    }
}