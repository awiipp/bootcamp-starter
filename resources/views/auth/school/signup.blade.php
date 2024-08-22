@extends('layouts.main')

@section('section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm m-auto">
        <form class="bg-white px-8 pt-6 pb-8 mb-4">
            <h2 class="text-center text-2xl font-bold mb-8">Sign Up</h2>
            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500" id="name" type="text" placeholder="Name">
            </div>
            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500" id="email" type="email" placeholder="Email">
            </div>
            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500" id="password" type="password" placeholder="********">
            </div>
            <div class="mb-8">
                <label class="block text-black text-sm font-bold mb-2" for="confirm-password">
                    Confirm Password
                </label>
                <input class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500" id="confirm-password" type="password" placeholder="********">
            </div>
            <div class="flex items-center justify-center mt-20 mb-20">
                <img src="{{ asset('assets/VaultX.png') }}" alt="VaultX" class="w-30 h-15">
            </div>
            <div class="flex items-center justify-center">
                <button class="bg-black text-white font-bold py-2 px-4 w-full rounded-lg focus:outline-none focus:shadow-outline" type="button">
                    Sign Up
                </button>
            </div>
            <p class="text-center text-gray-600 text-sm mt-4">
                Already have any account? <a href="#" class="text-black font-semibold">Sign In</a>
            </p>
        </form>
    </div>
</body>
</html>

@endsection