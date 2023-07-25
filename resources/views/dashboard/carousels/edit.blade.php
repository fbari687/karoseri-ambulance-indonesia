@extends('dashboard.layouts.main')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Edit {{ $title }}</h4>
    <form action="/admin/dashboard/carousels/{{ $carousel->id }}" method="POST" class="d-flex flex-column gap-2" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="image" class="d-block fw-bold">Pilih Gambar</label>
        <input type="hidden" name="oldImage" value="{{ $carousel->image }}">
          @if ($carousel->image)
            <img src="{{ asset('storage/' . $carousel->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
      <button type="submit" class="col-lg-2 btn btn-info align-self-end">Edit</button>
    </form>
  </div>
</div>
@endsection

@section('scriptjs')
<script>
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