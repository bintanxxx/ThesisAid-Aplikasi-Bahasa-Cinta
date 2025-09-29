@extends('layouts.admin')

@section('content')
<h3 class="text-gray-700 text-3xl font-medium mb-6">Tambah Gejala Baru</h3>

<div class="bg-white p-8 rounded-lg shadow-md">
    <form action="{{ route('admin.symptoms.store') }}" method="POST">
        @csrf
        {{-- Input Kode Gejala --}}
        <div class="mb-4">
            <label for="code" class="block text-gray-700 text-sm font-bold mb-2">Kode Gejala (Contoh: G01, G02)</label>
            <input type="text" name="code" id="code" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        {{-- Input Nama Gejala --}}
        <div class="mb-6">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Gejala</label>
            <textarea name="name" id="name" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
        </div>

        <div class="flex items-center justify-start">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan Gejala
            </button>
            <a href="{{ route('admin.symptoms.index') }}" class="ml-4 inline-block align-baseline font-bold text-sm text-gray-500 hover:text-gray-800">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection