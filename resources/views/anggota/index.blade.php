@extends('layout.master')

@section('page', 'Data Anggota')

@section('breadcrumb-item')
  <li class="breadcrumb-item" aria-current=""><a href="/">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page">Anggota</li>
@endsection

@section('main-content')
  <div class="container-fluid py-2 my-3 rounded shadow">
    <h5>Data Anggota</h5>
    <table class="table table-bordered">
      <thead class="table-light">
        <tr class="text-center">
          <th>No</th>
          {{-- <th>Id Anggota</th> --}}
          <th>Kode Anggota</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Jurusan</th>
          <th>No Telepon</th>
          {{-- <th>Alamat</th> --}}
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($anggota as $key=>$value)
        <tr>
          <td class="text-center">{{ $key + 1 }}</td>
          {{-- <td>{{ $value->id }}</td> --}}
          <td>{{ $value->kode_anggota }}</td>
          <td>{{ $value->nama_anggota }}</td>
          <td>{{ $value->jk_anggota }}</td>
          <td>{{ $value->jurusan_anggota }}</td>
          <td>{{ $value->no_telp_anggota }}</td>
          {{-- <td>{{ $value->alamat_anggota }}</td> --}}
          <td class="col-2">
            <form method="POST" action="{{ route('anggota.destroy', $value->id) }}">
              @csrf
              @method('DELETE')
              <a href="{{ route('anggota.show', $value->id) }}" class="btn btn-primary btn-sm">Show</a>
              <a href="{{ route('anggota.edit', $value->id) }}" class="btn btn-primary btn-sm">Edit</a>
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
    <div class="container-fluid d-flex justify-content-between p-0">
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
          <a href="{{ route('anggota.create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="arcs"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            <span style="color: #fff; text-decoration: none;">Tambah</span>
          </a>
        </button>
      </div>
    </div>
  </div>
@endsection