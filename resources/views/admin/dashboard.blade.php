@extends('layouts.admin')

@section('content')
<h3 class="text-gray-700 text-3xl font-medium">Admin Dashboard</h3>

<div class="mt-4">
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-3">
        <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
            <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21a6 6 0 00-9-5.197m0 0A10.99 10.99 0 0112 12c4.21 0 7.813 2.602 9.45 6.197M15 21a6 6 0 00-9-5.197"></path></svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600">Total Pengguna</p>
                <p class="text-lg font-semibold text-gray-700">125</p>
            </div>
        </div>

        <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600">Total Gejala</p>
                <p class="text-lg font-semibold text-gray-700">32</p>
            </div>
        </div>

        <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
            <div class="p-3 mr-4 text-yellow-500 bg-yellow-100 rounded-full">
               <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600">Total Aturan</p>
                <p class="text-lg font-semibold text-gray-700">48</p>
            </div>
        </div>
    </div>
</div>
@endsection