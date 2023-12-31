<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Petugas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = DB::table('petugas')->get();
        return view('petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          'nama' => 'required',
          'jabatan' => 'required',
          'telepon' => 'required',
          'alamat' => 'required',
        ]);

        $query = DB::table('petugas')->insert([
          'nama_petugas' => $request['nama'],
          'jabatan_petugas' => $request['jabatan'],
          'no_telp_petugas' => $request['telepon'],
          'alamat_petugas' => $request['alamat'],
        ]);

        return redirect('/petugas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $petugas = DB::table('petugas')->where('id', $id)->get();
        return view('petugas.show', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $petugas = DB::table('petugas')->where('id', $id)->get();
        return view('petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
          'nama' => 'required',
          'jabatan' => 'required',
          'telepon' => 'required',
          'alamat' => 'required',
        ]);

        $query = DB::table('petugas')->where('id', $id)->update([
          'nama_petugas' => $request['nama'],
          'jabatan_petugas' => $request['jabatan'],
          'no_telp_petugas' => $request['telepon'],
          'alamat_petugas' => $request['alamat'],
        ]);

        return redirect('/petugas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = DB::table('petugas')->where('id', $id)->delete();
        return redirect('/petugas');
    }
}
