<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Anggota extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = DB::table('anggota')->get();
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          'id_anggota' => 'required',
          'kode_anggota' => 'required',
          'nama' => 'required',
          'jenis_kelamin' => 'required',
          'jurusan' => 'required',
          'telepon' => 'required',
          'alamat' => 'required',
        ]);

        $query = DB::table('anggota')->insert([
          'id' => $request['id_anggota'],
          'kode_anggota' => $request['kode_anggota'],
          'nama_anggota' => $request['nama'],
          'jk_anggota' => $request['jenis_kelamin'],
          'jurusan_anggota' => $request['jurusan'],
          'no_telp_anggota' => $request['telepon'],
          'alamat_anggota' => $request['alamat'],
        ]);

        return redirect('/anggota');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
