@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-full max-w-md">

        <div class="bg-white shadow-md rounded-lg p-8">
            <h1 class="text-2xl font-bold text-center text-gray-700 mb-6">Daftar Akun Baru</h1>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                {{-- Input Nama --}}
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
                    <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                {{-- Input Email --}}
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Alamat Email</label>
                    <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                {{-- Input Password --}}
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                {{-- Konfirmasi Password --}}
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                        Daftar
                    </button>
                </div>
            </form>

            <p class="text-center text-gray-500 text-xs mt-6">
                Sudah punya akun? 
                <a class="text-blue-500 hover:text-blue-800" href="/login">
                    Login di sini
                </a>
            </p>
        </div>

    </div>
</div>
@endsection