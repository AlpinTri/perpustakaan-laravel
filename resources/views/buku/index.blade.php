@extends('layout.master')

@section('page', 'Data Buku')

@section('breadcrumb-item')
  <li class="breadcrumb-item" aria-current=""><a href="/">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
@endsection

@section('main-content')
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
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($buku as $key=>$value)     
        <tr>
          <td class="text-center">{{ $key + 1 }}</td>
          <td>{{ $value->id }}</td>
          <td>{{ $value->kode_buku }}</td>
          <td>{{ $value->judul_buku }}</td>
          <td>{{ $value->penulis_buku }}</td>
          <td>{{ $value->penerbit_buku }}</td>
          <td>{{ $value->tahun_terbit }}</td>
          <td>{{ $value->stok }}</td>
          <td>
            <div class="">
              <button type="button" class="btn btn-primary">Edit</button>
              <button type="button" class="btn btn-primary">Hapus</button>
            </div>
          </td>
        </tr>
        @empty
            <tr>
              <td colspan="8">Data tidak tersedia</td>
            </tr>
        @endforelse
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
    </div>
  </div>
@endsection