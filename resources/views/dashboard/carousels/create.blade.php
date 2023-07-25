@extends('dashboard.layouts.main')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Buat {{ $title }} Baru</h4>
    <form action="/admin/dashboard/carousels" method="POST" class="d-flex flex-column gap-2" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="image" class="d-block fw-bold">Pilih Gambar</label>
        <img src="" class="img-preview img-fluid mb-3 col-sm-5 d-block" id="imagePreview">
        <input type="file" id="image" name="image" onchange="previewImage()">
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
  function previewImage() {
        const preview = document.getElementById('imagePreview');
        const fileInput = document.getElementById('image');
        const file = fileInput.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
</script>
@endsection