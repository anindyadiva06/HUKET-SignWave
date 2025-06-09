<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\ArtikelController;

class ArtikelController extends Controller
{
    public function home() : View
    {
        $artikel_signwave = Artikel::all();
        return view('home-user', compact('artikel_signwave'));
    }

    public function indexView(): View
    {
        $artikel_signwave = Artikel::all();
        return view('index', compact('artikel_signwave'));
    }
    
    public function index() : View
    {
        $artikel_signwave = Artikel::all();
        return view('artikel.index', compact('artikel_signwave'));
    }

    public function tambah() : View
    {
        return view('artikel.tambah');
    }

    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'judul_artikel' => 'required|max:255',
        'konten' => 'required',
        'link' => 'required|url',
    ]);

    $artikel_signwave = new Artikel;
    $artikel_signwave->judul_artikel = $request->judul_artikel;
    $artikel_signwave->konten = $request->konten;
    $artikel_signwave->link = $request->link;
    $artikel_signwave->save();
    return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function edit($id) : View
    {
        $artikel_signwave = Artikel::findOrFail($id);
        return view('artikel.edit', compact('artikel_signwave'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_artikel' => 'required',
            'konten' => 'required',
            'link' => 'required|url',
        ]);


        $artikel_signwave = Artikel::find($id);
        $artikel_signwave->judul_artikel = $request->judul_artikel;
        $artikel_signwave->konten = $request->konten;
        $artikel_signwave->link = $request->link;
        $artikel_signwave->save();
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diubah!');
    }

    public function destroy($id)
    {
        $artikel_signwave = Artikel::findOrFail($id);
        $artikel_signwave->delete();

        return redirect()->back()->with('success', 'Artikel berhasil dihapus!');
    }
}

