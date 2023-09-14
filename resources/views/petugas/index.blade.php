@extends('layout.master')

@section('page', 'Data Buku')

@section('breadcrumb-item')
  <li class="breadcrumb-item" aria-current=""><a href="/">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
@endsection

@section('main-content')
  <div class="container-fluid py-2 my-3 rounded shadow">
    <h5>Data Petugas</h5>
    <table class="table table-bordered">
      <thead class="table-light">
        <tr class="text-center">
          <th>No</th>
          <th>Id Petugas</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>No Telepon</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($petugas as $key=>$value)
        <tr>
          <td class="text-center">{{ $key + 1 }}</td>
          <td>{{ $value->id }}</td>
          <td>{{ $value->nama_petugas }}</td>
          <td>{{ $value->jabatan_petugas }}</td>
          <td>{{ $value->no_telp_petugas }}</td>
          <td>{{ $value->alamat_petugas }}</td>
          <td>
            <div class="">
              <button type="button" class="btn btn-primary">Edit</button>
              <button type="button" class="btn btn-primary">Hapus</button>
            </div>
          </td>
        </tr>           
        @empty     
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