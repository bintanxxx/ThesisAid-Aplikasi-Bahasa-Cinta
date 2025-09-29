@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h3 class="text-gray-700 text-3xl font-medium">Daftar Gejala</h3>
    <a href="{{ route('admin.symptoms.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">
        + Tambah Gejala Baru
    </a>
</div>

{{-- NOTIFIKASI SUKSES --}}
@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif


<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full leading-normal">
        <thead>
            {{-- Header tabel sama seperti sebelumnya --}}
        </thead>
        <tbody>
            @forelse ($symptoms as $symptom)
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $symptom->code }}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $symptom->name }}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                    <a href="{{ route('admin.symptoms.edit', $symptom->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Ubah</a>
                    
                    <form action="{{ route('admin.symptoms.destroy', $symptom->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center py-4">Tidak ada data gejala.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    
    <div class="mt-4 p-4">
        {{ $symptoms->links() }}
    </div>
</div>
@endsection