<?php

namespace App\Http\Controllers;
use App\Models\Berita;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // halaman list berita
    public function index()
    {
        $berita = Berita::orderBy('tanggal', 'desc')->get();
        return view('berita.index', compact('berita'));
    }

    // detail berita
    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        // tambah jumlah dilihat
        $berita->increment('dilihat');

        return view('berita.show', compact('berita'));
    }
    // form tambah berita
    public function create()
    {
        return view('berita.add');
    }
//update/edit data
 public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'image|mimes:jpeg,,png,jpg,gif|max:2048',
            'tanggal' => 'required',
            'dilihat' => 'required',
            'isi' => 'required',
        ]);

        $berita = new Berita;

        $berita->title = $request->title;
        $berita->synopsis = $request->synopsis;
        $berita->schedule = $request->schedule;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
           
        }

        $berita->save();
        return redirect('/berita');
    }
    
     public function destroy(Berita $id)
    {
        $id->delete();

        return redirect()->route('berita.index')
            ->with('success', 'Berita Berhasil Dihapus');
    }
}