<?php

use Illuminate\Support\Facades\Route;

Route::get('/some-page', function () {
    return view('some-page');
})->name('some-page-route');

Route::get('/login', fn () => view('auth.login'));

Route::get('/', fn () => view('beranda.index'))->name('beranda');
Route::get('/penting', fn () => view('penting.index'))->name('penting');
Route::get('/kategori', fn () => view('kategori.index'))->name('kategori');
Route::get('/kategori-detail', fn () => view('kategori.detail'));
Route::get('/cari', fn () => view('cari.index'));
Route::get('/profile', fn () => view('profile.index'))->name('profile');
Route::get('/signup', fn () => view('auth.signup'))->name('signup');
Route::get('/login', fn () => view('auth.login'))->name('login');
