@extends('layouts.main')

@section('section')
<div class="p-6 bg-gray-50 min-h-screen">
    <!-- Header -->
    <div class="flex items-center">
      <div class="w-12 h-12 rounded-full bg-gray-300">
        <!-- User Image Placeholder -->
      </div>
      <div class="ml-4">
        <h1 class="text-xl font-semibold">Hai, Raka</h1>
        <p class="text-gray-500">Selamat datang di VaultX</p>
      </div>
    </div>
  
    <!-- Category Section -->
    <div class="mt-6">
      <h2 class="text-lg font-semibold">Kategori</h2>
      <div class="mt-4 grid grid-cols-2 gap-4">
        <!-- Category Buttons -->
        <a href="/kategori-detail" class="p-4 text-center bg-blue-900 text-white rounded-lg">Akademik</a>
        <a href="/kategori-detail" class="p-4 text-center bg-yellow-500 text-white rounded-lg">Kurikulum</a>
        <a href="/kategori-detail" class="p-4 text-center bg-blue-900 text-white rounded-lg">Administrasi sekolah</a>
        <a href="/kategori-detail" class="p-4 text-center bg-yellow-500 text-white rounded-lg">Bimbingan dan konseling</a>
        <a href="/kategori-detail" class="p-4 text-center bg-blue-900 text-white rounded-lg">Keuangan</a>
        <a href="/kategori-detail" class="p-4 text-center bg-yellow-500 text-white rounded-lg">Humas dan kerjasama</a>
        <a href="/kategori-detail" class="p-4 text-center bg-blue-900 text-white rounded-lg">Sarana dan Prasarana</a>
        <a href="/kategori-detail" class="p-4 text-center bg-yellow-500 text-white rounded-lg">Perpustakaan</a>
        <a href="/kategori-detail" class="p-4 text-center bg-blue-900 text-white rounded-lg">Kesiswaan</a>
        <a href="/kategori-detail" class="p-4 text-center bg-yellow-500 text-white rounded-lg">Laporan dan Evaluasi</a>
      </div>
    </div>
  
    <!-- Bottom Navigation -->
    <div class="fixed bottom-0 left-0 right-0 bg-white py-4 flex justify-around border-t border-gray-200">
      <button class="text-center">
        <svg class="w-6 h-6 mx-auto text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v16h16V4H4z"></path>
        </svg>
        <span class="text-sm text-gray-500">Beranda</span>
      </button>
      <button class="text-center">
        <svg class="w-6 h-6 mx-auto text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m-3-3H9"></path>
        </svg>
        <span class="text-sm text-gray-500">Penting</span>
      </button>
      <button class="text-center">
        <svg class="w-6 h-6 mx-auto text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16m-7 4h7"></path>
        </svg>
        <span class="text-sm text-gray-900">Kategori</span>
      </button>
      <button class="text-center">
        <svg class="w-6 h-6 mx-auto text-gray-500" xml
  
@endsection