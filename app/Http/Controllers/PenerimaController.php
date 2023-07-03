<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Penerima',
            'penerimas' => Penerima::all(),
        ];
        return view('penerima.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Penerima',
        ];
        return view('penerima.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_penerima" => "required",
            "alamat_penerima" => "required",
            "telepon_penerima" => "required",
        ]);

        Penerima::create([
            "nama_penerima" => $request->nama_penerima,
            "alamat_penerima" => $request->alamat_penerima,
            "telepon_penerima" => $request->telepon_penerima,
        ]);
        return redirect('/penerima')->with('success', 'Penerima berhasil ditambah!');
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
            'title' => 'Edit Penerima',
            'penerima' => Penerima::findOrFail($id),
        ];
        return view('penerima.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerima $penerima)
    {
        $request->validate([
            "nama_penerima" => "required",
            "alamat_penerima" => "required",
            "telepon_penerima" => "required",
        ]);

        $penerima->update($request->all());

        // dd($surat);

        return redirect('/penerima')->with('success', 'Penerima berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penerimas = Penerima::findOrFail($id);

        $penerimas->delete();

        return redirect()->back()->with('success', 'Penerima berhasil dihapus');
    }
}
