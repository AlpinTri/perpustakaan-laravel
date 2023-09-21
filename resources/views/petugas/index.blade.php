@extends('layout.master')

@section('page', 'Data Petugas')

@section('breadcrumb-item')
  <li class="breadcrumb-item" aria-current=""><a href="/">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page">Data Petugas</li>
@endsection

@section('main-content')
  <div class="container-fluid py-2 my-3 rounded shadow">
    <h5>Data Petugas</h5>
    <table class="table table-bordered">
      <thead class="table-light">
        <tr class="text-center">
          <th>No</th>
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
          <td>{{ $value->nama_petugas }}</td>
          <td>{{ $value->jabatan_petugas }}</td>
          <td>{{ $value->no_telp_petugas }}</td>
          <td>{{ $value->alamat_petugas }}</td>
          <td>
            <form method="POST" action="{{ route('petugas.destroy', $value->id) }}">
              @csrf
              @method('DELETE')
              <a href="{{ route('petugas.show', $value->id) }}" class="btn btn-primary btn-sm">Show</a>
              <a href="{{ route('petugas.edit', $value->id) }}" class="btn btn-primary btn-sm">Edit</a>
              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
          </td>
        </tr>           
        @empty
        <tr>
          <td colspan="9" class="text-center">
            Data tidak tersedia
          </td>
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
      <div class="p-0">
        <button type="button" class="btn btn-primary">
          <a href="{{ route('petugas.create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="arcs"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            <span style="color: #fff; text-decoration: none;">Tambah</span>
          </a>
        </button>
      </div>
    </div>
  </div>
@endsection