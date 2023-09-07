@extends('layout.master')

@section('page', 'Data Anggota')

@section('breadcrumb-item')
  <li class="breadcrumb-item" aria-current=""><a href="/">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page">Data Anggota</li>
@endsection

@section('main-content')
  <div class="container-fluid rounded shadow py-3 my-3">
    <h5>INPUT DATA ANGGOTA</h5>
    <hr>
    <form action="" class="row gx-3 gy-2">
      <div class="col-6">
        <label for="id-anggota" class="form-label m-0">Id Anggota</label>
        <input type="text" name="id-anggota" id="" class="form-control">
      </div>
      <div class="col-6">
        <label for="kode-anggota" class="form-label m-0">Kode Anggota</label>
        <input type="text" name="kode-anggota" id="" class="form-control">
      </div>
      <div class="col-6">
        <label for="nama" class="form-label m-0">Nama</label>
        <input type="text" name="nama" id="" class="form-control">
      </div>
      <div class="col-6">
        <label for="jenis-kelamin" class="form-label m-0">Jenis Kelamin</label>
        <select name="jenis-kelamin" id="" class="form-select">
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
        </select>
      </div>
      <div class="col-6">
        <label for="jurusan" class="form-label m-0">Jurusan</label>
        <input type="text" name="jurusan" id="" class="form-control">
      </div>
      <div class="col-6">
        <label for="telepon" class="form-label m-0">No Telepon</label>
        <input type="tel" name="telepon" id="" class="form-control">
      </div>
      <div class="col-12">
        <label for="alamat" class="form-label m-0">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="5" class="form-control"></textarea>
      </div>
      <div class="col-12 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
    </form>
  </div>
  <div class="container-fluid py-2 my-3 rounded shadow">
    <h5>Data Anggota</h5>
    <table class="table table-bordered">
      <thead class="table-light">
        <tr class="text-center">
          <th>No</th>
          <th>Id Anggota</th>
          <th>Kode Anggota</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Jurusan</th>
          <th>No Telepon</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center">1</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="text-center">2</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="text-center">3</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="text-center">4</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="text-center">5</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
    <div class="container-fluid d-flex justify-content-between align-items-center p-0">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="">
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-primary">Hapus</button>
      </div>
    </div>
  </div>
@endsection