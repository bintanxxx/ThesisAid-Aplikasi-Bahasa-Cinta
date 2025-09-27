@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-3xl">
    <div class="bg-white shadow-lg rounded-xl p-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-4">Hasil Diagnosis Anda</h1>

        {{-- Hasil Utama --}}
        <div class="text-center my-8">
            <p class="text-lg text-gray-600">Anda terindikasi memiliki "Bahasa Cinta" utama:</p>
            
            {{-- DATA DINAMIS DARI CONTROLLER --}}
            <h2 class="text-5xl font-extrabold text-blue-600 my-3">{{ $diagnosis->love_language->name }}</h2>
            <p class="text-2xl font-semibold text-gray-700">
                Dengan tingkat keyakinan <span class="text-blue-600">{{ round($diagnosis->cf_final * 100, 2) }}%</span>
            </p>
        </div>

        <hr class="my-8">

        {{-- Rekomendasi Love Language --}}
        <div class="mt-8 bg-blue-50 border-l-4 border-blue-500 text-blue-800 p-6 rounded-lg">
            <h3 class="text-2xl font-bold mb-3">Rekomendasi Untukmu</h3>
            
            {{-- DATA DINAMIS DARI CONTROLLER --}}
            <p class="leading-relaxed">{{ $diagnosis->love_language->description }}</p>
            
            {{-- Isi deskripsi di seeder jika masih '...' --}}
        </div>

        {{-- Tombol Aksi --}}
        <div class="mt-10 text-center">
            <a href="{{ route('user.kuesioner') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-3 px-6 rounded-lg mr-4 transition">
                ← Ulangi Diagnosis
            </a>
            <a href="{{ route('user.dashboard') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition">
                Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>
@endsection