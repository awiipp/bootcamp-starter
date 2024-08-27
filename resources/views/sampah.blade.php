@extends('layouts.main')

@section('section')
<div class="p-6 bg-gray-50 min-h-screen">
    <div class="flex items-center">
        <div class="w-12 h-12 rounded-full bg-gray-300">
          <!-- User Image Placeholder -->
        </div>
        <div class="ml-4">
          <h1 class="text-xl font-semibold">Hai, Raka</h1>
          <p class="text-gray-500">Selamat datang di VaultX</p>
        </div>
      </div>
      
    <!-- My Folders -->
    <div class="mt-8">
      <h2 class="text-lg font-semibold">Folder Penting</h2>
      <div class="mt-4 grid grid-cols-2 gap-4">
        <a href="">
          <div class="p-4 border-2 border-amber-400 hover:bg-amber-400 duration-300 rounded-lg text-center">
            <p>Folder penting</p>
          </div>
        </a>
      </div>

      <div class="mt-4 grid grid-cols-2 gap-4">
        <a href="">
          <div class="p-4 border-2 border-amber-400 hover:bg-amber-400 duration-300 rounded-lg text-center">
            <p>Folder penting</p>
          </div>
        </a>
      </div>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-semibold">File penting</h2>
        <div class="mt-4 grid grid-cols-2 gap-4">
          <a href="">
            <div class="p-4 border-2 border-amber-400 hover:bg-amber-400 duration-300 rounded-lg text-center">
              <p>File penting</p>
            </div>
          </a>
        </div>
  
        <div class="mt-4 grid grid-cols-2 gap-4">
          <a href="">
            <div class="p-4 border-2 border-amber-400 hover:bg-amber-400 duration-300 rounded-lg text-center">
              <p>File penting</p>
            </div>
          </a>
        </div>
      </div>
@endsection