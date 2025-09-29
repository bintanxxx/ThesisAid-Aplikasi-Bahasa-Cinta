@extends('layouts.admin')

@section('content')
{{-- Ubah Judul --}}
<h3 class="text-gray-700 text-3xl font-medium mb-6">Ubah Data Gejala</h3>

<div class="bg-white p-8 rounded-lg shadow-md">
    <form action="{{ route('admin.symptoms.update', $symptom->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        {{-- Input Kode Gejala --}}
        <input type="text" name="code" value="{{ old('code', $symptom->code) }}" ...>
        
        {{-- Input Nama Gejala --}}
        <textarea name="name" ...>{{ old('name', $symptom->name) }}</textarea>
        
        {{-- ... sisa form ... --}}
        <a href="{{ route('admin.symptoms.index') }}" class="ml-4 ...">Batal</a>
    </form>
</div>
@endsection