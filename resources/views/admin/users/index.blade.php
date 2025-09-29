@extends('layouts.admin')

@section('content')
<h3 class="text-gray-700 text-3xl font-medium mb-6">Daftar Pengguna</h3>

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full leading-normal">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">
                    Nama Pengguna
                </th>
                <th class="px-5 py-3 border-b-2 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">
                    Email
                </th>
                <th class="px-5 py-3 border-b-2 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">
                    Tanggal Registrasi
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900">{{ $user->name }}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900">{{ $user->email }}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900">{{ $user->created_at->format('d F Y') }}</p>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center py-4">Belum ada pengguna yang terdaftar.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4 p-4">
        {{ $users->links() }}
    </div>
</div>


@endsection