<?php

namespace App\Http\Controllers\Auth\School;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SchoolAuthController extends Controller
{
    public function signupForm(): View
    {
        return view('auth.school.signup');
    }

    public function signup(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        
        School::create([
            'name' => $request->input('name'),
            'password' => Hash::make($request->input('password')),
            'code' => random_int(100000, 999999)
        ]);

        return redirect('/login-sekolah')->with('success', 'Akun Sekolah berhasil dibuat');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('name', 'password');

        if(Auth::attempt($credential)) {
            return redirect('/');
        }
    }
}
