<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Kategori Surat',
            'kategoris' => Kategori::all(),
        ];
        return view('kategori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Kategori',
        ];
        return view('kategori.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_kategori" => "required",
        ]);

        Kategori::create([
            "nama_kategori" => $request->nama_kategori,
        ]);
        return redirect('/kategori')->with('success', 'Kategori berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title' => 'Edit Kategori',
            'kategori' => Kategori::findOrFail($id),
        ];
        return view('kategori.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            "nama_kategori" => "required",
        ]);

        $kategori->update($request->all());

        // dd($surat);

        return redirect('/kategori')->with('success', 'Kategori berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategoris = Kategori::findOrFail($id);

        $kategoris->delete();

        return redirect()->back()->with('success', 'Kategori berhasil dihapus');
    }
}
