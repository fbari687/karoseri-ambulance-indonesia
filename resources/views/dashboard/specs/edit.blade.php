@extends('dashboard.layouts.main')

@section('externalcss')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
@endsection

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Edit {{ $title }}</h4>
    <form action="/admin/dashboard/specs/{{ $spec->id }}" method="POST" class="d-flex flex-column gap-2">
      @method('put')
      @csrf
      <div class="d-flex flex-column">
        <label for="name" class="fw-bold">Nama</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="name" name="name" placeholder="nama" value="{{old('name', $spec->name )}}">
        </div>
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <label for="body" class="form-label fw-bold">Deskripsi</label>
      @error('body')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      <input id="body" type="hidden" name="body" value="{{old('body', $spec->body)}}">
      <trix-editor input="body"></trix-editor>
      <button type="submit" class="col-lg-2 btn btn-info align-self-end">Edit</button>
    </form>
  </div>
</div>
@endsection

@section('scriptjs')
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<script>
  document.addEventListener('trux-file-accept', function(e) {
      e.preventDefault();
    })
</script>
@endsection