@extends('layouts.main')

@section('section')
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
  <!-- Header -->
  <div class="w-full max-w-xs">
      <div class="flex justify-between items-center p-4">
          <button class="text-gray-500">
              <!-- Hamburger Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
              </svg>
          </button>
          <h2 class="text-xl font-semibold">Edit Profile</h2>
          <button class="text-gray-500">
              <!-- Settings Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m-3-3H9m6 6l2.5 2.5M9 12H5M15 6h.01" />
              </svg>
          </button>
      </div>
  </div>

  <!-- Profile Picture -->
  <div class="flex flex-col items-center">
      <div class="relative">
          <img class="w-24 h-24 rounded-full object-cover" src="https://via.placeholder.com/150" alt="Profile Picture">
          <button class="absolute bottom-0 right-0 bg-blue-600 text-white p-1 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l1.768 1.768a3 3 0 11-4.242 4.242L8.64 9.88a3 3 0 014.243-4.242l2.348 2.348z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 12l1.5 1.5m2 2L12 16M21 21l-4-4M3 3l18 18" />
              </svg>
          </button>
      </div>
      <form class="w-full max-w-xs mt-6">
          <!-- Name Field -->
          <div class="mb-4">
              <label class="block text-sm font-semibold text-gray-700">Name</label>
              <input type="text" class="mt-1 p-2 border border-gray-300 rounded w-full">
          </div>

          <!-- Email Field -->
          <div class="mb-4">
              <label class="block text-sm font-semibold text-gray-700">E-mail</label>
              <input type="email" class="mt-1 p-2 border border-gray-300 rounded w-full">
          </div>

          <!-- Edit Password Field -->
          <div class="mb-4">
              <label class="block text-sm font-semibold text-gray-700">Edit Password</label>
              <input type="password" class="mt-1 p-2 border border-gray-300 rounded w-full">
          </div>

          <!-- Confirm Password Field -->
          <div class="mb-4">
              <label class="block text-sm font-semibold text-gray-700">Confirm Password</label>
              <input type="password" class="mt-1 p-2 border border-gray-300 rounded w-full">
          </div>

          <!-- Logout and Delete Buttons -->
          <div class="flex justify-between mb-6">
              <button type="button" class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded w-1/2 mr-2">Logout</button>
              <button type="button" class="bg-blue-700 text-white font-semibold py-2 px-4 rounded w-1/2 ml-2">Delete</button>
          </div>

          <!-- Cancel and Save Buttons -->
          <div class="flex justify-between">
              <button type="button" class="border border-black text-black font-semibold py-2 px-4 rounded w-1/2 mr-2">CANCEL</button>
              <button type="submit" class="bg-black text-white font-semibold py-2 px-4 rounded w-1/2 ml-2">SAVE</button>
          </div>
      </form>
  </div>
</div>

@endsection
