<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Penerima;
use App\Models\Pengirim;
use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Sistem Surat Menyurat',
            'surats' => Surat::all(),
        ];
        return view('surat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Surat',
            'pengirims' => Pengirim::all(),
            'penerimas' => Penerima::all(),
            'kategoris' => Kategori::all(),
        ];
        return view('surat.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nomor_surat" => "required",
            "tanggal_surat" => "required",
            "judul" => "required",
            "isi" => "required",
            "pengirim_id" => "required",
            "penerima_id" => "required",
            "kategori_id" => "required",
        ]);

        Surat::create([
            "nomor_surat" => $request->nomor_surat,
            "tanggal_surat" => $request->tanggal_surat,
            "judul" => $request->judul,
            "isi" => $request->isi,
            "pengirim_id" => $request->pengirim_id,
            "penerima_id" => $request->penerima_id,
            "kategori_id" => $request->kategori_id,
        ]);
        return redirect('/')->with('success', 'Surat berhasil ditambah!');
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
            'title' => 'Edit Surat',
            'surat' => Surat::findOrFail($id),
            'pengirims' => Pengirim::all(),
            'penerimas' => Penerima::all(),
            'kategoris' => Kategori::all(),
        ];
        return view('surat.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surat $surat)
    {
        $request->validate([
            "nomor_surat" => "required",
            "tanggal_surat" => "required",
            "judul" => "required",
            "isi" => "required",
            "pengirim_id" => "required",
            "penerima_id" => "required",
            "kategori_id" => "required",
        ]);

        $surat->update($request->all());

        return redirect('/')->with('success', 'Surat berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $surats = Surat::findOrFail($id);

        $surats->delete();

        return redirect()->back()->with('success', 'Surat berhasil dihapus');
    }
}
