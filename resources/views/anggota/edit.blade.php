@extends('layout.master')

@section('page', 'Edit')

@section('breadcrumb-item')
  <li class="breadcrumb-item" aria-current=""><a href="/">Home</a></li>
  <li class="breadcrumb-item" aria-current=""><a href="{{ route('anggota.index') }}">Anggota</a></li>
  <li class="breadcrumb-item active" aria-current="page">Edit</li>
@endsection

@section('main-content')
  <div class="container-fluid rounded shadow py-3 my-3">
    <h5>Data {{ $anggota[0]->nama_anggota }}</h5>
    <hr>
    <form action="{{ route('anggota.update', $anggota[0]->id) }}" class="row gx-3 gy-2" method="POST">
      @csrf
      @method('PUT')
      {{-- <div class="col-6">
        <label for="id_anggota" class="form-label m-0">Id Anggota</label>
        <input type="text" name="id_anggota" id="" class="form-control" value="{{ $anggota[0]->id }}" disabled>
      </div> --}}
      <div class="col-12">
        <label for="kode_anggota" class="form-label m-0">Kode Anggota</label>
        <input type="text" name="kode_anggota" id="" class="form-control" value="{{ $anggota[0]->kode_anggota }}">
      </div>
      <div class="col-6">
        <label for="nama" class="form-label m-0">Nama</label>
        <input type="text" name="nama" id="" class="form-control" value="{{ $anggota[0]->nama_anggota }}">
      </div>
      <div class="col-6">
        <label for="jenis-kelamin" class="form-label m-0">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="" class="form-select">
          @if ($anggota[0]->jk_anggota == 'L')
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
          @else
              <option value="P">Perempuan</option>
              <option value="L">Laki-laki</option>
          @endif
        </select>
      </div>
      <div class="col-6">
        <label for="jurusan" class="form-label m-0">Jurusan</label>
        <input type="text" name="jurusan" id="" class="form-control" value="{{ $anggota[0]->jurusan_anggota }}">
      </div>
      <div class="col-6">
        <label for="telepon" class="form-label m-0">No Telepon</label>
        <input type="tel" name="telepon" id="" class="form-control" value="{{ $anggota[0]->no_telp_anggota }}">
      </div>
      <div class="col-12">
        <label for="alamat" class="form-label m-0">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="5" class="form-control">{{ $anggota[0]->alamat_anggota }}</textarea>
      </div>
      <div class="col-12 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Simpan perubahan</button>
      </div>
    </form>
  </div>
@endsection