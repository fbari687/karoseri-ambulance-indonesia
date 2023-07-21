@extends('dashboard.layouts.main')

@section('content')
<a href="/admin/dashboard/specs/create" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah Spesifikasi Baru</a>
@if (session()->has('success'))
<div class="col-lg-3 alert alert-success text-white" role="alert">
  <strong>Berhasil!</strong> {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center table-striped mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">#</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Nama</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Deskripsi</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($specs as $spec)
        <tr>
          <td>
            <div class="d-flex px-2">
              <p class="px-2 text-sm font-weight-normal mb-0">{{ $loop->iteration }}</p>
            </div>
          </td>
          <td>
            <p class="text-sm font-weight-bold mb-0">{{ $spec->name }}</p>
          </td>
          <td>
            {!! $spec->body !!}
          </td>
          <td>
            <a href="/admin/dashboard/specs/{{ $spec->id }}/edit" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
            <form action="/admin/dashboard/specs/{{ $spec->id }}" method="POST" class="d-inline-block">
              @method('delete')
              @csrf
              <button type="submit" onclick="return confirm('Yakin Hapus Spesifikasi {{ $spec->name }}?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
@endsection