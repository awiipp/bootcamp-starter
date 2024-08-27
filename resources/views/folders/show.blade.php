@extends('layouts.main')

@section('section')
<div class="">
    <div class="">
        <div class="mb-10">
            <a href="/" class="bg-zinc-800 inline py-1 px-4 text-white rounded-lg">Kembali</a>
        </div>
        <p class="text-2xl">{{ $folder->name }}</p>
    </div>
    <div class="mt-8">
        <h2 class="text-lg font-semibold">File</h2>
        <div class="mt-4 grid grid-cols-2 gap-4">
            <div class="p-4 border-2 border-amber-400 hover:bg-amber-400 duration-300 rounded-lg text-center">
                <p>File 1</p>
            </div>
        </div>

        <div class="mt-4 grid grid-cols-2 gap-4">
            <div class="p-4 border-2 border-amber-400 hover:bg-amber-400 duration-300 rounded-lg text-center">
                <p>File 1</p>
            </div>
        </div>

        <div class="mt-4 grid grid-cols-2 gap-4">
            <div class="p-4 border-2 border-amber-400 hover:bg-amber-400 duration-300 rounded-lg text-center">
                <p>File 1</p>
            </div>
        </div>

        <div class="mt-10 flex justify-center">
            <a class="flex items-center px-4 py-2 bg-zinc-900 text-white rounded-lg" href="/folders/create">
              <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
              </svg>
              <span>Buat File</span>
            </a>
          </div>
    </div>
</div>
@endsection