@extends('dashboard.layouts.main')

@section('content')
  <div class="col-lg-6 px-5 d-flex flex-column gap-4">
    <h4>Buat {{ $title }} Baru</h4>
    <form action="/admin/dashboard/brands" method="POST" class="d-flex flex-column gap-2">
      @csrf
      <div class="input-group input-group-outline my-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <button type="submit" class="col-lg-2 btn btn-info align-self-end">Create {{ $title }}</button>
    </form>
  </div>
@endsection