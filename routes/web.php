<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/some-page', function () {
    return view('some-page');
})->name('some-page-route');

Route::get('/login', fn () => view('auth.login'));

Route::get('/beranda', fn () => view('beranda.index'));
Route::get('/penting', fn () => view('penting.index'));
Route::get('/kategori', fn () => view('kategori.index'));
Route::get('/cari', fn () => view('cari.index'));