@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-3xl">
    <div class="bg-white shadow-lg rounded-xl p-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-2">Kuesioner Diagnosis</h1>
        <p class="text-center text-gray-600 mb-8">Pilih gejala-gejala yang paling sesuai dengan kondisi Anda selama beberapa minggu terakhir.</p>

        {{-- Form Kuesioner --}}
        <form action="/hasil" method="GET">
            @csrf
            <div class="space-y-5">

                {{-- Contoh Gejala 1 --}}
                <div class="relative flex items-start rounded-lg p-4 border border-gray-200 hover:bg-gray-50 transition">
                    <div class="flex h-6 items-center">
                        <input id="gejala1" name="symptoms[]" type="checkbox" value="G01" class="h-5 w-5 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                    </div>
                    <div class="ml-3 text-sm leading-6">
                        <label for="gejala1" class="font-medium text-gray-900">Merasa cemas, khawatir, atau tegang berlebihan.</label>
                    </div>
                </div>

                {{-- Contoh Gejala 2 --}}
                <div class="relative flex items-start rounded-lg p-4 border border-gray-200 hover:bg-gray-50 transition">
                    <div class="flex h-6 items-center">
                        <input id="gejala2" name="symptoms[]" type="checkbox" value="G02" class="h-5 w-5 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                    </div>
                    <div class="ml-3 text-sm leading-6">
                        <label for="gejala2" class="font-medium text-gray-900">Sulit tidur atau tidur tidak nyenyak.</label>
                    </div>
                </div>

                {{-- Contoh Gejala 3 --}}
                <div class="relative flex items-start rounded-lg p-4 border border-gray-200 hover:bg-gray-50 transition">
                    <div class="flex h-6 items-center">
                        <input id="gejala3" name="symptoms[]" type="checkbox" value="G03" class="h-5 w-5 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                    </div>
                    <div class="ml-3 text-sm leading-6">
                        <label for="gejala3" class="font-medium text-gray-900">Kehilangan minat atau kesenangan dalam melakukan aktivitas.</label>
                    </div>
                </div>

                {{-- Contoh Gejala 4 --}}
                <div class="relative flex items-start rounded-lg p-4 border border-gray-200 hover:bg-gray-50 transition">
                    <div class="flex h-6 items-center">
                        <input id="gejala4" name="symptoms[]" type="checkbox" value="G04" class="h-5 w-5 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                    </div>
                    <div class="ml-3 text-sm leading-6">
                        <label for="gejala4" class="font-medium text-gray-900">Merasa lelah atau tidak punya energi hampir setiap hari.</label>
                    </div>
                </div>

                {{-- Contoh Gejala 5 --}}
                <div class="relative flex items-start rounded-lg p-4 border border-gray-200 hover:bg-gray-50 transition">
                    <div class="flex h-6 items-center">
                        <input id="gejala5" name="symptoms[]" type="checkbox" value="G05" class="h-5 w-5 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                    </div>
                    <div class="ml-3 text-sm leading-6">
                        <label for="gejala5" class="font-medium text-gray-900">Sulit berkonsentrasi saat mengerjakan tugas kuliah atau membaca.</label>
                    </div>
                </div>

            </div>

            {{-- Tombol Submit --}}
            <div class="mt-10 text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition">
                    Lihat Hasil Diagnosis
                </button>
            </div>
        </form>
    </div>
</div>
@endsection