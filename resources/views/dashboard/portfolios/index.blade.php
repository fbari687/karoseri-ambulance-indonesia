@extends('dashboard.layouts.main')

@section('content')
<a href="/admin/dashboard/portfolios/create" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah Portfolio Baru</a>
@if (session()->has('success'))
<div class="col-lg-3 alert alert-success text-white" role="alert">
  <strong>Berhasil!</strong> {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card col">
  <div class="table-responsive">
    <table class="table table-striped align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">#</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Gambar</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($portfolios as $portfolio)
        <tr class="border-bottom">
          <td>
            <div class="d-flex px-2">
              <p class="px-2 text-sm font-weight-normal mb-0">{{ $loop->iteration }}</p>
            </div>
          </td>
          <td>
            <img src="{{ asset('storage/'.$portfolio->image) }}" alt="" height="200px">
          </td>
          <td>
            <form action="/admin/dashboard/portfolios/{{ $portfolio->id }}" method="POST" class="d-inline-block">
              @method('delete')
              @csrf
              <button type="submit" onclick="return confirm('Yakin Menghapus Portfolio ke-{{ $loop->iteration }}')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
@endsection