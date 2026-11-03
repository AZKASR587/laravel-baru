<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    // Menampilkan halaman utama (Home)
    public function index()
    {
        return view('home');
    }

    // Menampilkan halaman daftar projects untuk pengunjung
    public function projects()
    {
        $projects = Project::where('status', 'active')->latest()->paginate(6);
        return view('project', compact('projects'));
    }

    // Menampilkan halaman detail project
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('project-detail', compact('project'));
    }

    // Menampilkan halaman About
    public function about()
    {
        return view('about');
    }

    // Menampilkan halaman Contact
    public function contact()
    {
        return view('contact');
    }
}