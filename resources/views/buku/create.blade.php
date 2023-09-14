@extends('layout.master')

@section('page', 'Form Data Buku')

@section('breadcrumb-item')
  <li class="breadcrumb-item" aria-current=""><a href="/">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page">Form Data Buku</li>
@endsection

@section('main-content')
  <div class="container-fluid rounded shadow py-3 my-3">
    <h5>INPUT DATA BUKU</h5>
    <hr>
    <form action="{{ route('buku.store') }}" method="POST" class="row gx-3 gy-2">
      @csrf
      <div class="col-12">
        <label for="id_buku" class="form-label m-0">Id Buku</label>
        <input type="text" name="id_buku" id="" class="form-control">
      </div>
      <div class="col-6">
        <label for="kode_buku" class="form-label m-0">Kode Buku</label>
        <input type="text" name="kode_buku" id="" class="form-control">
      </div>
      <div class="col-6">
        <label for="judul" class="form-label m-0">Judul</label>
        <input type="text" name="judul" id="" class="form-control">
      </div>
      <div class="col-6">
        <label for="penulis" class="form-label m-0">Penulis</label>
        <input type="text" name="penulis" id="" class="form-control">
      </div>
      <div class="col-6">
        <label for="penerbit" class="form-label m-0">Penerbit</label>
        <input type="text" name="penerbit" id="" class="form-control">
      </div>
      <div class="col-6">
        <label for="tahun_terbit" class="form-label m-0">Tahun Terbit</label>
        <input type="text" name="tahun_terbit" id="" class="form-control">
      </div>
      <div class="col-6">
        <label for="stok" class="form-label m-0">Stok</label>
        <input type="number" name="stok" id="" class="form-control">
      </div>
      <div class="col-12 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
    </form>
  </div>
@endsection