@extends('dashboard.layouts.main')

@section('content')
<a href="/admin/dashboard/contacts/create" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah Contact Baru</a>
@if (session()->has('success'))
<div class="col-lg-3 alert alert-success text-white" role="alert">
  <strong>Berhasil!</strong> {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card">
  <div class="table-responsive">
    <table class="table table-striped align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">#</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Jenis</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Nama/Title</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Deskripsi</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Link</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contacts as $contact)
        <tr class="border-bottom">
          <td>
            <div class="d-flex px-2">
              <p class="px-2 text-sm font-weight-normal mb-0">{{ $loop->iteration }}</p>
            </div>
          </td>
          <td>
            {{ $contact->socmed->name }}
          </td>
          <td>
            <small>
              {{ $contact->name }}
            </small>
          </td>
          <td>
            <small>
              {{ $contact->deskripsi }}
            </small>
          </td>
          <td>
            <small>
              {{ $contact->link }}
            </small>
          </td>
          <td>
            <a href="/admin/dashboard/contacts/{{ $contact->id }}/edit" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
            <form action="/admin/dashboard/contacts/{{ $contact->id }}" method="POST" class="d-inline-block">
              @method('delete')
              @csrf
              <button type="submit" onclick="return confirm('Yakin Menghapus Contact {{ $contact->socmed->name }}')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
@endsection