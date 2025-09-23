@extends('layouts.admin')

@section('content')
{{-- Ubah Judul --}}
<h3 class="text-gray-700 text-3xl font-medium mb-6">Ubah Data Gejala</h3>

<div class="bg-white p-8 rounded-lg shadow-md">
    <form action="" method="POST">
        @csrf
        {{-- Nanti kita tambahkan @method('PUT') di sini --}}

        <div class="mb-4">
            <label for="code" class="block text-gray-700 text-sm font-bold mb-2">Kode Gejala</label>
            {{-- Tambahkan value untuk menampilkan data yang ada --}}
            <input type="text" name="code" id="code" value="G01" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-6">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Gejala</label>
            {{-- Isi textarea dengan data yang ada --}}
            <textarea name="name" id="name" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" required>Merasa cemas, khawatir, atau tegang berlebihan.</textarea>
        </div>

        <div class="flex items-center justify-start">
            {{-- Ubah teks tombol --}}
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update Gejala
            </button>
            <a href="#" class="ml-4 inline-block align-baseline font-bold text-sm text-gray-500 hover:text-gray-800">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection