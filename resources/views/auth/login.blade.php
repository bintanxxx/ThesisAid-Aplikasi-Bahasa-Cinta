@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-full max-w-md">

        {{-- Card Container --}}
        <div class="bg-white shadow-md rounded-lg p-8">
            <h1 class="text-2xl font-bold text-center text-gray-700 mb-6">Login ke ThesisAid</h1>

            {{-- Form Login --}}
            <form action="{{ route('login') }}" method="POST">
                @csrf

                {{-- Input Email --}}
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Alamat Email</label>
                    <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                @error('email')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror

                {{-- Input Password --}}
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                {{-- Tombol Login --}}
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                        Masuk
                    </button>
                </div>

            </form>

            <p class="text-center text-gray-500 text-xs mt-6">
                Belum punya akun? 
                <a class="text-blue-500 hover:text-blue-800" href="/register">
                    Daftar di sini
                </a>
            </p>
        </div>

    </div>
</div>
@endsection