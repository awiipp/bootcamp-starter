@extends('layouts.main')

@section('section')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm m-auto">
         <form class="bg-white px-8 pt-6 pb-8 mb-4">
        <div class="flex flex-col items-center justify-center">
            <div class="w-16 h-16 bg-white-200 border border-black rounded-full flex items-center justify-center mb-2 mt-20">
                <svg class="w-8 h-8 text-Black-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-2.672 0-8 1.337-8 4v2h16v-2c0-2.663-5.328-4-8-4z" />
                </svg>
            </div>
            <h2 class="text-2xl font-semibold mb-4">Login</h2>
        </div>

        <form>
            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500" id="name" type="text" placeholder="Name">
            </div>

            <div class="mb-12">
                <label class="block text-black text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500" id="name" type="text" placeholder="*********">
            </div>

            <div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Log In
                </button>
            </div>
            <div class="flex items-center justify-center mt-20 mb-20">
                <img src="{{ asset('assets/VaultX.png') }}" alt="VaultX" class="w-30 h-15">
            </div>
    
            <p class="text-center text-gray-600 text-sm mt-4">
                Didn’t have any account? <a href="#" class="text-black font-semibold">Sign Up</a>
            </p>
        </div>
        </form>
</body>

</html>

@endsection