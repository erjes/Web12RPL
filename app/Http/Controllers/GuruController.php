<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();

        return view('gurus.index', compact('gurus'));
    }

    public function create()
    {
        return view('gurus.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'nip' => 'required|string',
            'notes' => 'required|string',
            'kelas' => 'required|integer',
        ]);

        // Buat guru baru
        $guru = new Guru();
        $guru->name = $request->input('name');
        $guru->image = $request->file('image')->store('fotoGuru');
        $guru->nip = $request->input('nip');
        $guru->notes = $request->input('notes');
        $guru->kelas = $request->input('kelas');
        $guru->save();

        // Redirect ke halaman daftar guru
        return redirect()->route('gurus.index');
    }

    public function show($id)
    {
        $guru = Guru::find($id);

        return view('gurus.show', compact('guru'));
    }

    public function edit($id)
    {
        $guru = Guru::find($id);

        return view('gurus.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'image' => 'image', // Hapus 'required' jika gambar tidak selalu diubah
            'nip' => 'required|string|max:255',
            'notes' => 'nullable|string',
            'kelas' => 'required|integer',
        ]);

        // Temukan guru yang akan diupdate
        $guru = Guru::find($id);

        // Update guru
        $guru->name = $request->input('name');
        if ($request->hasFile('image')) {
            $guru->image = $request->file('image')->store('fotoGuru');
        }
        $guru->nip = $request->input('nip');
        $guru->notes = $request->input('notes');
        $guru->kelas = $request->input('kelas');
        $guru->save();

        // Redirect ke halaman daftar guru
        return redirect()->route('gurus.index');
    }

    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return redirect()->route('gurus.index');
    }
}
