@extends('layouts.main')

@section('section')
<div class="min-h-screen flex flex-col items-center justify-center bg-white">
  <!-- Header -->
  <div class="w-full max-w-xs">
      <div class="flex justify-between items-center mb-8">
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
          <button class="absolute bottom-0 right-0 bg-blue-900 text-white p-1 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l1.768 1.768a3 3 0 11-4.242 4.242L8.64 9.88a3 3 0 014.243-4.242l2.348 2.348z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 12l1.5 1.5m2 2L12 16M21 21l-4-4M3 3l18 18" />
              </svg>
          </button>
      </div>
      <form class="w-full max-w-xs mt-6">
          <!-- Name Field -->
          <div class="mb-4">
            <label class="block text-black text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500" id="name" type="text" placeholder="Name">
        </div>

          <!-- Email Field -->
          <div class="mb-4">
            <label class="block text-black text-sm font-bold mb-2" for="name">
                E-mail
            </label>
            <input class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500" id="name" type="text" placeholder="Email">
        </div>

        <!-- Password Field -->
        <div class="mb-4">
            <label class="block text-black text-sm font-bold mb-2" for="password">
                Password
            </label>
            <div class="relative">
                <input id="password" class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500 pr-10" type="password" placeholder="Password">
                <button type="button" onclick="togglePasswordVisibility('password', 'eye-icon')" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                    <svg id="eye-icon" class="h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Confirm Password Field -->
        <div class="mb-8">
            <label class="block text-black text-sm font-bold mb-2" for="confirm-password">
                Confirm Password
            </label>
            <div class="relative">
                <input id="confirm-password" class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500 pr-10" type="password" placeholder="Confirm Password">
                <button type="button" onclick="togglePasswordVisibility('confirm-password', 'eye-icon-confirm')" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                    <svg id="eye-icon-confirm" class="h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </button>
            </div>
        </div>

        <script>
            function togglePasswordVisibility(inputId, iconId) {
                const passwordInput = document.getElementById(inputId);
                const eyeIcon = document.getElementById(iconId);

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A6.96 6.96 0 0112 19c-4.477 0-8.268-2.943-9.542-7a12.06 12.06 0 012.643-4.608l1.414 1.414A9.955 9.955 0 002 12c1.274 4.057 5.065 7 9.542 7 1.217 0 2.388-.233 3.457-.675l1.418 1.418a11.993 11.993 0 01-2.542.682zm7.07-7.07l-1.415-1.415a9.978 9.978 0 00-1.93-1.931l-1.415 1.415A6.96 6.96 0 0112 15c-1.797 0-3.442-.682-4.657-1.793l-1.418 1.418A9.955 9.955 0 002 12c1.274 4.057 5.065 7 9.542 7 1.217 0 2.388-.233 3.457-.675l1.418 1.418A11.993 11.993 0 0112 19a12.06 12.06 0 01-4.608-2.643l1.415-1.415A6.96 6.96 0 0012 15a6.96 6.96 0 001.793-.242l1.418-1.418A9.978 9.978 0 0015 12a9.955 9.955 0 00-1.793-4.657l1.418-1.418a12.06 12.06 0 012.643 4.608zM12 11a1 1 0 100 2 1 1 0 000-2z"/>
                    `;
                } else {
                    passwordInput.type = 'password';
                    eyeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    `;
                }
            }
        </script>



          <!-- Logout and Delete Buttons -->
          <div class="flex justify-between mb-2">
              <button type="button" class="bg-blue-900 text-white font-semibold py-1 px-2 rounded w-1/2 mr-2">Logout</button>
          </div>

          <div class="flex items-center justify-center mt-20 mb-20">
            <img src="{{ asset('assets/VaultX.png') }}" alt="VaultX" class="w-30 h-15">
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
