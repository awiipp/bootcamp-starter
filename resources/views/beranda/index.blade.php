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
    <h2 class="mt-6 text-lg font-semibold">Baru di lihat</h2>
    <div class="min-w-full overflow-x-scroll">
      <div class="flex space-x-4 mt-4">
        <!-- Image Card 1 -->
        <div class="w-24">
          <img class="rounded-lg" src="https://via.placeholder.com/150" alt="Image 1">
          <div class="mt-2 text-center">
            <p class="text-gray-500 text-sm">4 Menit yang lalu</p>
            <p class="text-sm font-semibold">IMG-20080302-0007.jpg</p>
          </div>
        </div>
                <!-- Image Card 1 -->
                <div class="w-24">
                  <img class="rounded-lg" src="https://via.placeholder.com/150" alt="Image 1">
                  <div class="mt-2 text-center">
                    <p class="text-gray-500 text-sm">4 Menit yang lalu</p>
                    <p class="text-sm font-semibold">IMG-20080302-0007.jpg</p>
                  </div>
                </div>
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
        <div class="p-4 bg-gray-200 rounded-lg text-center">
          <p>Tugas Bu Vera</p>
        </div>
      </div>
    </div>

    <!-- New Folder Button -->
    <div class="mt-10 flex justify-center">
      <button class="flex items-center px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">
        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        <span>Baru</span>
      </button>
    </div>
    
    <!-- Storage and Trash -->
    <div class="mt-14 flex justify-between">
      <div class="flex-1 ml-4 py-3 bg-yellow-500 text-white rounded-lg flex items-center justify-center">
        <button class="text-lg font-semibold">Keranjang Sampah</button>
      </div>
    </div>
  
@endsection