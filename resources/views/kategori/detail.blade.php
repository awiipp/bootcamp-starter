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
  
    <!-- Akademik Section -->
  <div>
    <h2 class="text-lg font-semibold">Kategori > Akademik</h2>
    <div class="grid grid-cols-2 gap-4 mt-4">
      <!-- Folder Items -->
      <div class="p-4 bg-gray-100 rounded-lg flex flex-col items-center">
        <img src="{{ asset('assets/Folder.jpg') }}" alt="ANBK 2024" class="w-16 h-16">
        <p class="mt-2 text-center font-medium">ANBK 2024</p>
      </div>
      <div class="p-4 bg-gray-100 rounded-lg flex flex-col items-center">
        <img src="{{ asset('assets/Folder.jpg') }}" alt="STS 2023/24 Semester 1" class="w-16 h-16">
        <p class="mt-2 text-center font-medium">STS 2023/24 Semester 1</p>
      </div>
      <div class="p-4 bg-gray-100 rounded-lg flex flex-col items-center">
        <img src="{{ asset('assets/Folder.jpg') }}" alt="SAS 2023/24 Semester 1" class="w-16 h-16">
        <p class="mt-2 text-center font-medium">SAS 2023/24 Semester 1</p>
      </div>
      <div class="p-4 bg-gray-100 rounded-lg flex flex-col items-center">
        <img src="{{ asset('assets/Folder.jpg') }}" alt="USBN 2024" class="w-16 h-16">
        <p class="mt-2 text-center font-medium">USBN 2024</p>
      </div>
      <div class="p-4 bg-gray-100 rounded-lg flex flex-col items-center">
        <img src="{{ asset('assets/Folder.jpg') }}" alt="Tes TOEIC 2024" class="w-16 h-16">
        <p class="mt-2 text-center font-medium">Tes TOEIC 2024</p>
      </div>
      <div class="p-4 bg-gray-100 rounded-lg flex flex-col items-center">
        <img src="{{ asset('assets/Folder.jpg') }}" alt="Ujian Sekolah 2023/24" class="w-16 h-16">
        <p class="mt-2 text-center font-medium">Ujian Sekolah 2023/24</p>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  
    {{-- Category Kurikulum --}}
    
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