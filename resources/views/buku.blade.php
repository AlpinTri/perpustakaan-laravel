@extends('layout.master')

@section('page', 'Data Buku')

@section('breadcrumb-item')
  <li class="breadcrumb-item" aria-current=""><a href="/">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
@endsection

@section('main-content')
  <div class="container-fluid rounded shadow py-3 my-3">
    <h5>INPUT DATA BUKU</h5>
    <hr>
    <form action="" class="row gx-3 gy-2">
      <div class="col-12">
        <label for="id-buku" class="form-label m-0">Id Buku</label>
        <input type="text" name="id-buku" id="" class="form-control">
      </div>
      <div class="col-6">
        <label for="kode-buku" class="form-label m-0">Kode Buku</label>
        <input type="text" name="kode-buku" id="" class="form-control">
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
        <label for="tahun-terbit" class="form-label m-0">Tahun Terbit</label>
        <input type="text" name="tahun-terbit" id="" class="form-control">
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
  <div class="container-fluid py-2 my-3 rounded shadow">
    <h5>Data Buku</h5>
    <table class="table table-bordered">
      <thead class="table-light">
        <tr class="text-center">
          <th>No</th>
          <th>Id Buku</th>
          <th>Kode Buku</th>
          <th>Judul</th>
          <th>Penulis</th>
          <th>Penerbit</th>
          <th>Tahun Terbit</th>
          <th>Stok</th>
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