@extends('dashboard.layouts.main')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Buat {{ $title }} Baru</h4>
    <form action="/admin/dashboard/cars" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-2">
      @csrf
      <div class="d-flex flex-column">
        <label for="name" class="fw-bold">Nama</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
        </div>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" hidden>
      <div class="d-flex flex-column">
        <label for="name" class="fw-bold">Brand</label>
        <div class="input-group input-group-static mb-4">
          <select class="form-control" name="brand_id">
            <option disabled selected>Pilih Brand</option>
            @foreach ($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
          </select>
        </div>
        @error('brand_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label class="fw-bold">Spesifikasi</label><br>
        @foreach ($specs as $spec)
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="specs[]" value="{{ $spec->id }}" id="spec_{{ $spec->id }}">
          <label class="custom-control-label" for="spec_{{ $spec->id }}">{{ $spec->name }}</label>
        </div>
        @endforeach
        @error('specs')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="image" class="d-block fw-bold">Pilih Gambar</label>
      <input type="file" id="image" name="image">
    </div>
    @error('image')
      <div class="text-danger">{{ $message }}</div>
    @enderror
      <button type="submit" class="col-lg-2 btn btn-info align-self-end">Create</button>
    </form>
  </div>
</div>
@endsection

@section('scriptjs')
  <script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
      fetch('/admin/dashboard/cars/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    })
  </script>
@endsection