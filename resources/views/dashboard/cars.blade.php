@extends('dashboard.layouts.main')

@section('content')
<a href="" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah Model Baru</a>
<div class="card">
  <div class="table-responsive">
    <table class="table table-striped align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">#</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Nama</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Brand</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Spesifikasi</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cars as $car)
        <tr class="border-bottom">
          <td>
            <div class="d-flex px-2">
              <p class="px-2 text-sm font-weight-normal mb-0">{{ $loop->iteration }}</p>
            </div>
          </td>
          <td>
            <p class="text-sm font-weight-bold mb-0">{{ $car->name }}</p>
          </td>
          <td>
            <p class="text-sm font-weight-bold mb-0">{{ $car->brand->name }}</p>
          </td>
          <td>
            <p class="text-sm font-weight-bold mb-0">@foreach ($car->specs as $spec)
              <span>{{ $spec->name }}</span>,
            @endforeach</p>
          </td>
          <td>
            <a href="" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
@endsection