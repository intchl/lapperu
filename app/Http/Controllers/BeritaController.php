<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    // ===================== ADMIN SIDE =====================
    public function index()
    {
        $berita = Berita::orderBy('tanggal', 'desc')->get();
        return view('admin.berita.index', compact('berita'));
    }

    public function create()
    {
        return view('admin.berita.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'   => 'required|string|max:200',
            'tanggal' => 'required|date',
            'foto'    => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'isi'     => 'required'
        ]);

        $namaFoto = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('images/berita'), $namaFoto);

        Berita::create([
            'judul'   => $request->judul,
            'tanggal' => $request->tanggal,
            'foto'    => $namaFoto,
            'isi'     => $request->isi,
            'dilihat' => 0
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    // Fungsi Show: Digunakan Admin (berita.show) dan User (berita.detail)
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->increment('dilihat');

        // Jika URL mengandung 'berita-detail', arahkan ke tampilan User
        if (request()->is('*berita-detail*')) {
            return view('user.pages.berita-detail', compact('berita'));
        }

        // Default: Arahkan ke tampilan Admin
        return view('admin.berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'   => 'required|string|max:200',
            'tanggal' => 'required|date',
            'foto'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'isi'     => 'required'
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul   = $request->judul;
        $berita->tanggal = $request->tanggal;
        $berita->isi     = $request->isi;

        if ($request->hasFile('foto')) {
            if ($berita->foto && File::exists(public_path('images/berita/' . $berita->foto))) {
                File::delete(public_path('images/berita/' . $berita->foto));
            }
            $namaFoto = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('images/berita'), $namaFoto);
            $berita->foto = $namaFoto;
        }

        $berita->save();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->foto && File::exists(public_path('images/berita/' . $berita->foto))) {
            File::delete(public_path('images/berita/' . $berita->foto));
        }
        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }

    // ===================== USER SIDE =====================
    public function userIndex()
    {
        $berita = Berita::orderBy('tanggal', 'desc')->get();
        return view('user.pages.berita', compact('berita'));
    }
}
