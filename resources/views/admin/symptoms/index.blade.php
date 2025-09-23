@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h3 class="text-gray-700 text-3xl font-medium">Daftar Gejala</h3>
    <a href="/admin/symptoms/create" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">
        + Tambah Gejala Baru
    </a>
</div>

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full leading-normal">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Kode
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Nama Gejala
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            {{-- Contoh Data 1 --}}
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">G01</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">Merasa cemas, khawatir, atau tegang berlebihan.</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Ubah</a>
                    <a href="#" class="text-red-600 hover:text-red-900">Hapus</a>
                </td>
            </tr>

            {{-- Contoh Data 2 --}}
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">G02</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">Sulit tidur atau tidur tidak nyenyak.</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Ubah</a>
                    <a href="#" class="text-red-600 hover:text-red-900">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection