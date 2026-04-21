<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\TokoBuku;

class TokoController extends Controller
{
    public function index(): View
    {
        $toko_buku = TokoBuku::query()->latest()->paginate(5);
        return view('read', compact('toko_buku'));
    }
    public function create(): View
    {
        return view('buku.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_buku' => ['required', 'string', 'max:255'],
            'pengarang' => ['required', 'string', 'max:255'],
            'penerbit' => ['required', 'string', 'max:255'],
            'genre' => ['required', 'string', 'max:255'],
            'tahun_terbit' => ['required', 'integer'],
        ]);

        TokoBuku::create($validated);

        return redirect()->route('buku.index');
    }
    public function edit($id): View
    {
        $toko_buku = TokoBuku::query()->findOrFail($id);
        return view('buku.edit', compact('toko_buku'));
    }
    public function update(Request $request, $id)
    {
        $toko_buku = TokoBuku::query()->findOrFail($id);

        $validated = $request->validate([
            'judul_buku' => ['required', 'string', 'max:255'],
            'pengarang' => ['required', 'string', 'max:255'],
            'penerbit' => ['required', 'string', 'max:255'],
            'genre' => ['required', 'string', 'max:255'],
            'tahun_terbit' => ['required', 'integer'],
        ]);

        $toko_buku->update($validated);
        return redirect()->route('buku.index')->with('success', 'Data berhasil diupdate!');
    }
    public function destroy($id)
    {
        $toko_buku = TokoBuku::query()->findOrFail($id);
        $toko_buku->delete();
        return redirect()->route('buku.index')->with('success', 'Data berhasil dihapus!');
    }
}