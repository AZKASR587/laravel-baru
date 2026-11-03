<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar Kiri -->
        <aside class="w-64 bg-slate-800 text-white flex flex-col shrink-0">
            <div class="p-6 text-xl font-bold border-b border-slate-700">
                Admin Panel
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="{{ url('/admin') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-slate-700 rounded-lg font-medium">Dashboard</a>
                <!-- Diperbaiki menggunakan helper route() -->
                <a href="{{ route('project.index') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-slate-700 rounded-lg font-medium">Project</a>
            </nav>
        </aside>

        <!-- Area Konten Utama -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            <header class="bg-white border-b border-gray-200 px-8 py-4 flex justify-end items-center">
                <span class="text-gray-600 font-medium text-sm">Halo, Administrator</span>
            </header>
            <main class="p-8 flex-1">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>