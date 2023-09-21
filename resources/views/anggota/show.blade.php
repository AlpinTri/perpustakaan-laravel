@extends('layout.master')

@section('page', 'Detail')

@section('breadcrumb-item')
  <li class="breadcrumb-item" aria-current=""><a href="/">Home</a></li>
  <li class="breadcrumb-item" aria-current=""><a href="{{ route('anggota.index') }}">Anggota</a></li>
  <li class="breadcrumb-item active" aria-current="page">Detail</li>
@endsection

@section('main-content')
  <div class="container-fluid rounded shadow py-3 my-3">
    <h5>Data {{ $anggota[0]->nama_anggota }}</h5>
    <hr>
    <form action="" class="row gx-3 gy-2" method="">
      <div class="col-6">
        <label for="id_anggota" class="form-label m-0">Id Anggota</label>
        <input type="text" name="id_anggota" id="" class="form-control" value="{{ $anggota[0]->id }}" disabled>
      </div>
      <div class="col-6">
        <label for="kode_anggota" class="form-label m-0">Kode Anggota</label>
        <input type="text" name="kode_anggota" id="" class="form-control" value="{{ $anggota[0]->kode_anggota }}" disabled>
      </div>
      <div class="col-6">
        <label for="nama" class="form-label m-0">Nama</label>
        <input type="text" name="nama" id="" class="form-control" value="{{ $anggota[0]->nama_anggota }}" disabled>
      </div>
      <div class="col-6">
        <label for="jenis-kelamin" class="form-label m-0">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="" class="form-select" disabled>
            <option value="">
              @if ($anggota[0]->jk_anggota == 'L')
                  Laki-laki
              @else
                  Perempuan
              @endif
            </option>
        </select>
      </div>
      <div class="col-6">
        <label for="jurusan" class="form-label m-0">Jurusan</label>
        <input type="text" name="jurusan" id="" class="form-control" value="{{ $anggota[0]->jurusan_anggota }}" disabled>
      </div>
      <div class="col-6">
        <label for="telepon" class="form-label m-0">No Telepon</label>
        <input type="tel" name="telepon" id="" class="form-control" value="{{ $anggota[0]->no_telp_anggota }}" disabled>
      </div>
      <div class="col-12">
        <label for="alamat" class="form-label m-0">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="5" class="form-control" disabled>{{ $anggota[0]->alamat_anggota }}</textarea>
      </div>
    </form>
  </div>
@endsection