<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function signupForm(): View
    {
        return view('auth.user.signup');
    }

    public function signup(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required']
        ]);
        
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect('/login')->with('success', 'Akun anda berhasil dibuat.');
    }
    
    public function loginForm(): View
    {
        return view('auth.user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'max:255', 'lowercase', 'email'],
            'password' => ['required']
        ]);

        $credential = $request->only('name', 'password');

        if(Auth::attempt($credential)) {
            return redirect('/');
        }
    }
}
