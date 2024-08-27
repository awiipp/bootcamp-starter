<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // $folders = Folder::where('user_id', Auth::id())->get();
        $folders = Folder::all();

        return view('beranda.index', compact('folders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('folders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required']
        ]);

        Folder::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'is_important' => $request->has('is_important'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect('/')->with(['success' => 'Berhasil membuat folder baru.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug): View
    {
        $folder = Folder::where('slug', $slug)->first();
        $files = $folder->files;

        return view('folders.show', [
            'folder' => $folder,
            'files' => compact('files')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $folder = Folder::findOrFail($id);

        return view('folders.edit', compact('folder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'unique:folders,name,NULL,id,user_id,' . Auth::id()]
        ]);

        $folder = Folder::findOrFail($id);

        $folder->update([
            'name' => $request->input('name'),
            'is_important' => $request->input('is_important')
        ]);

        return redirect('/')->with(['success' => 'Nama folder berhasil diubah.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {   
        $folder = Folder::findOrFail($id);

        foreach ($folder->files as $file) {
            $file->delete();
        }

        $folder->delete();

        return redirect('/')->with(['success' => 'Folder berhasil dihapus.']);
    }
}
