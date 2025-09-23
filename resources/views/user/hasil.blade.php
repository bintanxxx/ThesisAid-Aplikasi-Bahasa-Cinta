@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-3xl">
    <div class="bg-white shadow-lg rounded-xl p-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-4">Hasil Diagnosis Anda</h1>

        {{-- Hasil Utama --}}
        <div class="text-center my-8">
            <p class="text-lg text-gray-600">Anda terindikasi mengalami:</p>
            <h2 class="text-5xl font-extrabold text-blue-600 my-3">Stres Tingkat Sedang</h2>
            <p class="text-2xl font-semibold text-gray-700">
                Dengan tingkat keyakinan <span class="text-blue-600">75%</span>
            </p>
        </div>

        {{-- Garis Pemisah --}}
        <hr class="my-8">

        {{-- Penjelasan Detail --}}
        <div>
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Apa Artinya Ini?</h3>
            <p class="text-gray-600 leading-relaxed">
                Stres tingkat sedang menunjukkan bahwa Anda menghadapi tekanan yang cukup signifikan dari perkuliahan atau kehidupan pribadi. Gejala seperti sulit tidur, cemas, dan kurangnya energi adalah hal yang wajar dalam kondisi ini. Penting untuk tidak mengabaikannya dan mulai mengambil langkah-langkah untuk mengelola stres agar tidak berkembang menjadi lebih serius.
            </p>
        </div>

        {{-- Rekomendasi Love Language --}}
        <div class="mt-8 bg-blue-50 border-l-4 border-blue-500 text-blue-800 p-6 rounded-lg">
            <h3 class="text-2xl font-bold mb-3">Rekomendasi Bahasa Cinta Untukmu</h3>
            <p class="font-semibold text-lg mb-2">Quality Time (Waktu Berkualitas)</p>
            <p class="leading-relaxed">
                Saat ini, meluangkan waktu untuk melakukan hal yang Anda nikmati tanpa gangguan adalah hal yang sangat penting. Cobalah untuk menjadwalkan "me-time" setidaknya 30 menit setiap hari. Matikan notifikasi, dengarkan musik, baca buku, atau sekadar duduk santai. Ini akan membantu Anda terhubung kembali dengan diri sendiri dan meredakan ketegangan.
            </p>
        </div>

        {{-- Tombol Aksi --}}
        <div class="mt-10 text-center">
            <a href="/kuesioner" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-3 px-6 rounded-lg mr-4 transition">
                ← Ulangi Diagnosis
            </a>
            <a href="/dashboard" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition">
                Kembali ke Dashboard
            </a>
        </div>

    </div>
</div>
@endsection