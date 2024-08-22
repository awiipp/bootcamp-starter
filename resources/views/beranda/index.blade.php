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
  
    <!-- Recently Viewed -->
    <div class="mt-6">
      <h2 class="text-lg font-semibold">Baru di lihat</h2>
      <div class="flex space-x-4 mt-4">
        <!-- Image Card 1 -->
        <div class="w-24">
          <img class="rounded-lg" src="https://via.placeholder.com/150" alt="Image 1">
          <div class="mt-2 text-center">
            <p class="text-gray-500 text-sm">4 Menit yang lalu</p>
            <p class="text-sm font-semibold">IMG-20080302-0007.jpg</p>
          </div>
        </div>
        <!-- Image Card 2 -->
        <div class="w-24">
          <img class="rounded-lg" src="https://via.placeholder.com/150" alt="Image 2">
          <div class="mt-2 text-center">
            <p class="text-gray-500 text-sm">4 Menit yang lalu</p>
            <p class="text-sm font-semibold">IMG-20080302-0007.jpg</p>
          </div>
        </div>
        <!-- Image Card 3 -->
        <div class="w-24">
          <img class="rounded-lg" src="https://via.placeholder.com/150" alt="Image 3">
          <div class="mt-2 text-center">
            <p class="text-gray-500 text-sm">4 Menit yang lalu</p>
            <p class="text-sm font-semibold">IMG-20080302-0007.jpg</p>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Storage and Trash -->
    <div class="mt-8 flex justify-between">
      <div class="flex-1 mr-4 p-4 bg-blue-600 text-white rounded-lg">
        <div class="flex items-center justify-between">
          <p class="text-sm font-medium">Internal</p>
          <p class="text-sm">16 GB / 32 GB</p>
        </div>
      </div>
      <div class="flex-1 ml-4 p-4 bg-yellow-500 text-white rounded-lg flex items-center justify-center">
        <button class="text-lg font-semibold">Sampah</button>
      </div>
    </div>
  
    <!-- My Folders -->
    <div class="mt-8">
      <h2 class="text-lg font-semibold">Folder Saya</h2>
      <div class="mt-4 grid grid-cols-2 gap-4">
        <div class="p-4 bg-gray-200 rounded-lg text-center">
          <p>Projek IPAS</p>
        </div>
        <div class="p-4 bg-gray-200 rounded-lg text-center">
          <p>Tugas Bu Vera</p>
        </div>
      </div>
    </div>
  
    <!-- New Folder Button -->
    <div class="mt-4 flex justify-center">
      <button class="flex items-center px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">
        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        <span>+ Baru</span>
      </button>
    </div>
  
    <!-- Bottom Navigation -->
    <div class="fixed bottom-0 left-0 right-0 bg-white py-4 flex justify-around border-t border-gray-200">
      <button class="text-center">
        <svg class="w-6 h-6 mx-auto text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v16h16V4H4z"></path>
        </svg>
        <span class="text-sm text-gray-900">Beranda</span>
      </button>
      <button class="text-center">
        <svg class="w-6 h-6 mx-auto text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m-3-3H9"></path>
        </svg>
        <span class="text-sm text-gray-500">Penting</span>
      </button>
      <button class="text-center">
        <svg class="w-6 h-6 mx-auto text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16m-7 4h7"></path>
        </svg>
        <span class="text-sm text-gray-500">Kategori</span>
      </button>
      <button class="text-center">
        <svg class="w-6 h-6 mx-auto text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6h13M8 10h13M3 14h18m-6 4H3"></path>
        </svg>
        <span class="text-sm text-gray-500">Cari</span>
      </button>
    </div>
  </div>
  
@endsection