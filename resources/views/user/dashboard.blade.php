@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    {{-- Header Sambutan --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Selamat Datang, Pengguna!</h1>
        <p class="text-gray-600 mt-1">Semoga harimu menyenangkan. Siap untuk lebih mengenali dirimu?</p>
    </div>

    {{-- Card Aksi Utama --}}
    <div class="bg-white shadow-lg rounded-xl p-8 max-w-2xl mx-auto">
        <div class="flex items-center">
            {{-- Ikon atau Gambar (opsional) --}}
            <div class="hidden sm:block mr-6">
                {{-- Ganti dengan SVG atau gambar yang sesuai --}}
                <svg class="w-16 h-16 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>

            {{-- Konten Teks dan Tombol --}}
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Mulai Diagnosis</h2>
                <p class="mt-2 text-gray-600">
                    Klik tombol di bawah untuk memulai kuesioner. Jawablah setiap pertanyaan sesuai dengan apa yang kamu rasakan selama ini untuk mendapatkan hasil yang akurat.
                </p>
                <div class="mt-6">
                    <a href="/kuesioner" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                        Mulai Isi Kuesioner →
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection