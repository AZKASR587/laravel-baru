<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Wajib ada untuk menghapus file gambar

class ProjectController extends Controller
{
    // Menampilkan halaman data project
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    // Menampilkan form tambah project
    public function create()
    {
        return view('admin.projects.create');
    }

    // Menyimpan data project baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'teknologi' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        Project::create([
            'title' => $request->title,
            'teknologi' => $request->teknologi,
            'image' => $imagePath,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil ditambahkan!');
    }

    // Menampilkan form edit project
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    // Memperbarui data project di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'teknologi' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        $project = Project::findOrFail($id);
        
        $imagePath = $project->image;
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        $project->update([
            'title' => $request->title,
            'teknologi' => $request->teknologi,
            'image' => $imagePath,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diperbarui!');
    }

    // Menghapus data project dari database
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        // Hapus file gambar dari storage jika ada
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus!');
    }
}