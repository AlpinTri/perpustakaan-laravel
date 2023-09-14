<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Buku extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = DB::table('buku')->get();
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
          'id_buku' => 'required',
          'kode_buku' => 'required',
          'judul' => 'required',
          'penulis' => 'required',
          'penerbit' => 'required',
          'tahun_terbit' => 'required',
          'stok' => 'required',
        ]);

        $query = DB::table('buku')->insert([
          'id' => $request['id_buku'],
          'kode_buku' => $request['kode_buku'],
          'judul_buku' => $request['judul'],
          'penulis_buku' => $request['penulis'],
          'penerbit_buku' => $request['penerbit'],
          'tahun_terbit' => $request['tahun_terbit'],
          'stok' => $request['stok'],
        ]);

        return redirect('/buku');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
