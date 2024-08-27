@extends('layouts.main') 

@section('section')
<div class="w-full max-w-sm m-auto">
    <h1 class="text-center text-2xl font-bold mt-10 mb-20">Buat Folder Baru</h1>
    <form class="bg-white px-8 pt-6 pb-8 mb-4" action="{{ route('folders.store') }}" method="post">
        @csrf
        <div class="mb-6">
            <label class="block text-black text-sm font-bold mb-2" for="name">
                Nama Folder
            </label>
            <input
                class="border border-black rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500"
                id="name"
                name="name"
                type="text"
                placeholder="Name"
            />
        </div>

        <div class="mb-6">
            <label
                class="block text-black text-sm font-bold mb-2"
                for="category"
            >
                Kategori
            </label>
            <select name="category_id" id="category">
                <option value="1">Akademik</option>
                <option value="2">Kurikulum</option>
                <option value="3">Administrasi Sekolah</option>
                <option value="4">Bimbingan Konseling</option>
                <option value="5">Keuangan</option>
                <option value="6">Humas dan Kerjasama</option>
                <option value="7">Sarana dan Prasarana</option>
                <option value="8">Perpustakaan</option>
                <option value="9">Kesiswaan</option>
                <option value="10">Laporan dan Evaluasi</option>
            </select>
        </div>

        <div class="mb-12 flex flex-row-reverse justify-end">
            <label
                class="block text-black text-sm font-bold ml-2"
                for="penting"
            >
                Penting
            </label>
            <input
                class="border border-black py-2 px-2 leading-tight focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-500"
                id="name"
                value="1"
                type="checkbox"
            />
        </div>

        <div>
            <button
                type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
                Buat
            </button>
        </div>
    </form>
</div>
@endsection
