@extends('layouts.main')

@section('section')
    <div class="w-full max-w-sm m-auto">
         <form class="bg-gray-50 px-8 pt-6 pb-8 mb-4">
        <div class="flex flex-col items-center justify-center">
            <div class="w-16 h-16 bg-white-200 border border-black rounded-full flex items-center justify-center mb-2 mt-20">
                <svg class="w-8 h-8 text-Black-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-2.672 0-8 1.337-8 4v2h16v-2c0-2.663-5.328-4-8-4z" />
                </svg>
            </div>
            <h2 class="text-2xl font-semibold mb-6">Login</h2>
        </div>

        <form>
            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500" id="name" type="text" placeholder="Name">
            </div>

            <!-- Password Field -->
            <div class="mb-10">
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

            <div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Login
                </button>
            </div>
            <div class="flex items-center justify-center mt-20 mb-20">   
                <img src="{{ asset('assets/VaultX.png') }}" alt="VaultX" class="w-25 h-10">
            </div>
    
            <p class="text-center text-gray-600 text-sm mt-4">
                Didn’t have any account? <a href="#" class="text-black font-semibold">Sign Up</a>
            </p>
        </div>
        </form>
@endsection