<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThesisAid - Solusi Cemas Mahasiswa</title>

    {{-- Import Font Poppins dari Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
{{-- Tambahkan class font-sans agar font Poppins diterapkan --}}
<body class="bg-gray-50 text-gray-800 font-sans">
    
    {{-- ===== NAVBAR ===== --}}
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-blue-600">ThesisAid</a>
            
            <div class="space-x-4">
                {{-- Link akan tampil jika pengguna BELUM login --}}
                @guest
                    <a href="/login" class="text-gray-600 hover:text-blue-600">Login</a>
                    <a href="/register" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition">Register</a>
                @endguest

                {{-- Link akan tampil jika pengguna SUDAH login --}}
                @auth
                    <a href="/dashboard" class="text-gray-600 hover:text-blue-600">Dashboard</a>
                    {{-- Kita buat form untuk logout agar lebih aman --}}
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-blue-600">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
    {{-- ===== END NAVBAR ===== --}}


    {{-- Konten Utama dengan padding atas dan bawah --}}
    <main class="container mx-auto my-12 px-6">
        @yield('content')
    </main>


    {{-- ===== FOOTER ===== --}}
    <footer class="bg-white mt-auto">
        <div class="container mx-auto px-6 py-4 text-center text-gray-500">
            <p>&copy; {{ date('Y') }} ThesisAid. All Rights Reserved.</p>
        </div>
    </footer>
    {{-- ===== END FOOTER ===== --}}

</body>
</html>