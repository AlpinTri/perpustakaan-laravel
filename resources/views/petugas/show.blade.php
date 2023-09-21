@extends('layout.master')

@section('page', 'Detail')

@section('breadcrumb-item')
  <li class="breadcrumb-item" aria-current=""><a href="/">Home</a></li>
  <li class="breadcrumb-item" aria-current=""><a href="{{ route('petugas.index') }}">Petugas</a></li>
  <li class="breadcrumb-item active" aria-current="page">Detail</li>
@endsection

@section('main-content')
  <div class="container-fluid rounded shadow py-3 my-3">
    <h5>Data {{ $petugas[0]->nama_petugas }}</h5>
    <hr>
    <form action="" method="POST" class="row gx-3 gy-2">
      <div class="col-6">
        <label for="id_petugas" class="form-label m-0">Id Petugas</label>
        <input type="text" name="id_petugas" id="" class="form-control" disabled value="{{ $petugas[0]->id }}" disabled>
      </div>
      <div class="col-6">
        <label for="nama" class="form-label m-0">Nama</label>
        <input type="text" name="nama" id="" class="form-control" disabled value="{{ $petugas[0]->nama_petugas }}">
      </div>
      <div class="col-6">
        <label for="jabatan" class="form-label m-0">Jabatan</label>
        <input type="text" name="jabatan" id="" class="form-control" disabled value="{{ $petugas[0]->jabatan_petugas }}">
      </div>
      <div class="col-6">
        <label for="telepon" class="form-label m-0">No Telepon</label>
        <input type="tel" name="telepon" id="" class="form-control" disabled value="{{ $petugas[0]->no_telp_petugas }}">
      </div>
      <div class="col-12">
        <label for="alamat" class="form-label m-0">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="5" class="form-control" disabled>{{ $petugas[0]->alamat_petugas }}</textarea>
      </div>
    </form>
  </div>
@endsection