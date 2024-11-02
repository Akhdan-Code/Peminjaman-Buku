<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required|string|max:100',
            'nama_buku' => 'required|string|max:100',
            'jumlah_buku' => 'integer',
            'tanggal_pinjam' => 'date',
            'tanggal_kembali' => 'nullable|date',
            'denda' => 'nullable|integer',
        ]);
    
        Buku::create([
            'nama_peminjam' => $request->nama_peminjam,
            'nama_buku' => $request->nama_buku,
            'jumlah_buku' => $request->jumlah_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'denda' => $request->denda,
        ]);
    
        return redirect()->route('buku.index');
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
    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_peminjam' => 'required|string|max:100',
            'nama_buku' => 'required|string|max:100',
            'jumlah_buku' => 'integer',
            'tanggal_pinjam' => 'date',
            'tanggal_kembali' => 'nullable|date',
            'denda' => 'nullable|integer',
        ]);
        $buku = Buku::findOrFail($id);
    
        $buku->update([
            'nama_peminjam' => $request->nama_peminjam,
            'nama_buku' => $request->nama_buku,
            'jumlah_buku' => $request->jumlah_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'denda' => $request->denda,
        ]);
    
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index');
    }
}
