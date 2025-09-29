@extends('layouts.admin')

@section('content')
<h3 class="text-gray-700 text-3xl font-medium mb-6">Tambah Aturan Baru</h3>

<div class="bg-white p-8 rounded-lg shadow-md">
    <form action="{{ route('admin.rules.store') }}" method="POST">
        @csrf
        {{-- Dropdown Gejala --}}
        <div class="mb-4">
            <label for="symptom_id" class="block text-gray-700 text-sm font-bold mb-2">JIKA Gejala:</label>
            <select name="symptom_id" id="symptom_id" class="shadow border rounded w-full py-2 px-3 text-gray-700" required>
                <option value="">-- Pilih Gejala --</option>
                {{-- Opsi akan diisi dari controller --}}
                @foreach ($symptoms as $symptom)
                    <option value="{{ $symptom->id }}" @if($rule->symptom_id == $symptom->id) selected @endif>
                        {{ $symptom->code }} - {{ $symptom->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Dropdown Bahasa Cinta --}}
        <div class="mb-4">
            <label for="love_language_id" class="block text-gray-700 text-sm font-bold mb-2">MAKA Bahasa Cinta:</label>
            <select name="love_language_id" id="love_language_id" class="shadow border rounded w-full py-2 px-3 text-gray-700" required>
                <option value="">-- Pilih Bahasa Cinta --</option>
                {{-- Opsi akan diisi dari controller --}}
                @foreach ($love_languages as $language)
                    <option value="{{ $language->id }}" @if($rule->love_language_id == $language->id) selected @endif>
                        {{ $language->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Input Nilai CF --}}
        <div class="mb-6">
            <label for="cf_expert" class="block text-gray-700 text-sm font-bold mb-2">Dengan Nilai CF Pakar (Contoh: 0.8, 0.75)</label>
            <input type="number" step="0.01" min="0" max="1" name="cf_expert" id="cf_expert" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
        </div>

        <div class="flex items-center justify-start">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Simpan Aturan
            </button>
            <a href="{{ route('admin.rules.index') }}" class="ml-4 text-gray-500 hover:text-gray-800">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection