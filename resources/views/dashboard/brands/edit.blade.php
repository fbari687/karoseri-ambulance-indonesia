@extends('dashboard.layouts.main')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Edit {{ $title }}</h4>
    <form action="/admin/dashboard/brands/{{ $brand->id }}" method="POST" class="d-flex flex-column gap-2">
      @method('put')
      @csrf
      <div class="input-group input-group-outline my-3">
        <input type="text" class="form-control" id="name" name="name" placeholder="nama" value="{{ old('name',  $brand->name)}}">
      </div>
      @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      <button type="submit" class="col-lg-2 btn btn-info align-self-end">Edit {{ $title }}</button>
    </form>
  </div>
</div>
@endsection
