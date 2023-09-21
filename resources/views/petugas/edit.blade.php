@extends('layout.master')

@section('page', 'Edit')

@section('breadcrumb-item')
  <li class="breadcrumb-item" aria-current=""><a href="/">Home</a></li>
    <li class="breadcrumb-item" aria-current=""><a href="{{ route('petugas.index') }}">Petugas</a></li>
  <li class="breadcrumb-item active" aria-current="page">Edit</li>
@endsection

@section('main-content')
  <div class="container-fluid rounded shadow py-3 my-3">
    <h5>Data {{ $petugas[0]->nama_petugas }}</h5>
    <hr>
    <form action="{{ route('petugas.update', $petugas[0]->id ) }}" method="POST" class="row gx-3 gy-2">
      @csrf
      @method('PUT')
      <div class="col-6">
        <label for="nama" class="form-label m-0">Nama</label>
        <input type="text" name="nama" id="" class="form-control" value="{{ $petugas[0]->nama_petugas }}">
      </div>
      <div class="col-6">
        <label for="jabatan" class="form-label m-0">Jabatan</label>
        <input type="text" name="jabatan" id="" class="form-control" value="{{ $petugas[0]->jabatan_petugas }}">
      </div>
      <div class="col-6">
        <label for="telepon" class="form-label m-0">No Telepon</label>
        <input type="tel" name="telepon" id="" class="form-control" value="{{ $petugas[0]->no_telp_petugas }}">
      </div>
      <div class="col-12">
        <label for="alamat" class="form-label m-0">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="5" class="form-control">{{ $petugas[0]->alamat_petugas }}</textarea>
      </div>
      <div class="col-12 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Edit Data</button>
      </div>
    </form>
  </div>
@endsection