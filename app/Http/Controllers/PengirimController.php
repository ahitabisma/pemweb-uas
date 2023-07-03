<?php

namespace App\Http\Controllers;

use App\Models\Pengirim;
use Illuminate\Http\Request;

class PengirimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Pengirim',
            'pengirims' => Pengirim::all(),
        ];
        return view('pengirim.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Pengirim',
        ];
        return view('pengirim.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_pengirim" => "required",
            "alamat_pengirim" => "required",
            "telepon_pengirim" => "required",
        ]);

        Pengirim::create([
            "nama_pengirim" => $request->nama_pengirim,
            "alamat_pengirim" => $request->alamat_pengirim,
            "telepon_pengirim" => $request->telepon_pengirim,
        ]);
        return redirect('/pengirim')->with('success', 'Pengirim berhasil ditambah!');
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
            'title' => 'Edit Pengirim',
            'pengirim' => Pengirim::findOrFail($id),
        ];
        return view('pengirim.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengirim $pengirim)
    {
        $request->validate([
            "nama_pengirim" => "required",
            "alamat_pengirim" => "required",
            "telepon_pengirim" => "required",
        ]);

        $pengirim->update($request->all());

        // dd($surat);

        return redirect('/pengirim')->with('success', 'Pengirim berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengirims = Pengirim::findOrFail($id);

        $pengirims->delete();

        return redirect()->back()->with('success', 'Pengirim berhasil dihapus');
    }
}
