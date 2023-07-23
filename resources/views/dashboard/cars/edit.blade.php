@extends('dashboard.layouts.main')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Edit {{ $title }}</h4>
    <form action="/admin/dashboard/cars" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-2">
      @csrf
      <div class="d-flex flex-column">
        <label for="name" class="fw-bold">Nama</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ old('name', $car->name) }}">
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
            @foreach ($brands as $brand)
            @if (old('brand_id', $car->brand_id) == $brand->id)
              <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
            @else 
              <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endif
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
            <input class="form-check-input" type="checkbox" name="specs[]" id="spec_{{ $spec->id }}" value="{{ $spec->id }}" @if(is_array(old('specs')) && in_array($spec->id, old('specs')) || $car->specs->contains($spec->id)) checked @endif>
              <label class="form-check-label" for="spec_{{ $spec->id }}">
                  {{ $spec->name }}
              </label>
          </div>
          @endforeach
        @error('specs')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="image" class="d-block fw-bold">Pilih Gambar</label>
      <input type="hidden" name="oldImage" value="{{ $car->image }}">
        @if ($car->image)
          <img src="{{ asset('storage/' . $car->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
        @else
          <img class="img-preview img-fluid mb-3 col-sm-5" id="imagePreview">
        @endif
        <input class="@error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
    </div>
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

    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview')

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(OFREvent) {
        imgPreview.src = OFREvent.target.result;
      }
    }
  </script>
@endsection