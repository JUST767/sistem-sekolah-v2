<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#f8f9fa] font-sans antialiased min-h-screen flex flex-col text-slate-800">
    
    <!-- Navbar -->
    <nav class="bg-[#151b2b] border-b-2 border-yellow-600">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between h-20 items-center">
                <div>
                    <h1 class="text-white text-xl font-bold tracking-wide">Sistem Sekolah</h1>
                    <p class="text-slate-400 text-[10px] tracking-widest uppercase mt-0.5">Buku Induk Siswa</p>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="{{ route('students.index') }}" class="text-slate-300 hover:text-white text-sm font-medium">Siswa</a>
                    <a href="{{ route('teachers.index') }}" class="text-slate-300 hover:text-white text-sm font-medium">Guru</a>
                    <a href="{{ route('classes.index') }}" class="text-slate-300 hover:text-white text-sm font-medium">Kelas</a>
                    <a href="{{ route('majors.index') }}" class="text-slate-300 hover:text-white text-sm font-medium">Jurusan</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="flex-grow w-full max-w-6xl mx-auto px-4 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="max-w-6xl mx-auto px-4 py-6 flex justify-between items-center text-xs text-slate-400">
        <p>&copy; 2026 Sistem Sekolah</p>
        <p class="uppercase tracking-widest">Media Pembelajaran SMK</p>
    </footer>

</body>
</html>