@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h3 class="text-gray-700 text-3xl font-medium">Daftar Aturan Pakar</h3>
    <a href="{{ route('admin.rules.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">
        + Tambah Aturan Baru
    </a>
</div>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full leading-normal">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Jika Gejala (IF)
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Maka Bahasa Cinta (THEN)
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Nilai CF
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            {{-- Data akan diisi dari controller --}}
             @forelse ($rules as $rule)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900">({{ $rule->symptom->code }}) {{ $rule->symptom->name }}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900">{{ $rule->love_language->name }}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 font-semibold">{{ $rule->cf_expert }}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                        <a href="{{ route('admin.rules.edit', $rule->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Ubah</a>
                        <form action="{{ route('admin.rules.destroy', $rule->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus aturan ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-4">Belum ada data aturan.</td>
                </tr>
                @endforelse
        </tbody>
    </table>

    <div class="mt-4 p-4">
        {{ $rules->links() }}
    </div>
</div>
@endsection