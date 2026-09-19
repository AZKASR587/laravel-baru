<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700012',
            'nama' => 'azka syahmi ramadhan',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'azkasr836@gmail.com',
            'status' => 'aktif',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}