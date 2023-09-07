@extends('layout.master')

@section('page', 'Home')

@section('breadcrumb-item')
  <li class="breadcrumb-item active" aria-current="page">Home</li>
@endsection

@section('main-content')
  <div class="row">
    <div class="col-4">
      <div class="card" style="">
        <div class="card-body text-start d-flex justify-content-between">
          <h6 class="card-title my-auto">Total Buku</h6>
          <h6 class="ms-auto my-auto">5<h6>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card" style="">
        <div class="card-body text-start d-flex justify-content-between">
          <h6 class="card-title my-auto">Total Siswa</h6>
          <h6 class="ms-auto my-auto">5<h6>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid py-2 my-3 rounded shadow">
    <h5>Data Buku</h5>
    <table class="table table-bordered">
      <thead class="table-light">
        <tr class="text-center">
          <th>No</th>
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
        </tr>
        <tr>
          <td class="text-center">2</td>
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
        </tr>
        <tr>
          <td class="text-center">4</td>
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
        </tr>
      </tbody>
    </table>
    <div class="container-fluid d-flex justify-content-start align-items-center p-0">
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
      {{-- <div class="">
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-primary">Hapus</button>
      </div> --}}
    </div>
  </div>
@endsection