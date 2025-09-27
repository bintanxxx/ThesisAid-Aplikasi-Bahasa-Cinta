@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-3xl">
    <div class="bg-white shadow-lg rounded-xl p-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-2">Kuesioner Diagnosis</h1>
        <p class="text-center text-gray-600 mb-8">Pilih gejala-gejala yang paling sesuai dengan kondisi Anda selama beberapa minggu terakhir.</p>

        {{-- Form Kuesioner --}}
        <form action="{{ route('user.diagnose') }}" method="POST">
            @csrf
            <div class="space-y-5">

                {{-- LOOPING GEJALA DARI DATABASE --}}
                @foreach ($symptoms as $symptom)
                <div class="relative flex items-start rounded-lg p-4 border border-gray-200 hover:bg-gray-50 transition">
                    <div class="flex h-6 items-center">
                        {{-- value-nya adalah id dari gejala --}}
                        <input id="symptom-{{ $symptom->id }}" name="symptoms[]" type="checkbox" value="{{ $symptom->id }}" class="h-5 w-5 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                    </div>
                    <div class="ml-3 text-sm leading-6">
                        <label for="symptom-{{ $symptom->id }}" class="font-medium text-gray-900">
                            {{-- Tampilkan kode dan nama gejala --}}
                            ({{ $symptom->code }}) {{ $symptom->name }}
                        </label>
                    </div>
                </div>
                @endforeach
                {{-- AKHIR LOOPING --}}

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