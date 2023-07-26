@extends('dashboard.layouts.main')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4 class="text-capitalize">Buat {{ $title }} Baru</h4>
    <form action="/admin/dashboard/portfolios" method="POST" class="d-flex flex-column gap-2" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="images" class="d-block fw-bold">Pilih Gambar</label>
        <input type="file" class="form-control-file" name="images[]" id="images" multiple>
      </div>
      @error('images')
        <div class="text-danger">{{ $message }}</div>
      @enderror
      <div id="previewContainer" class="border p-2 d-flex flex-wrap gap-2">
    
      </div>
      <button type="submit" class="col-lg-2 btn btn-info align-self-end">Create</button>
    </form>
  </div>
</div>
@endsection
@section('scriptjs')
  <script>
    function handleFileInputChange(e) {
      const files = e.target.files;
      const previewContainer = document.getElementById("previewContainer");
      previewContainer.innerHTML = "";

      for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
          const img = document.createElement("img");
          img.src = e.target.result;
          img.style.maxWidth = "200px";
          previewContainer.appendChild(img);
        };

        reader.readAsDataURL(file);
      }
    }

    document.getElementById("images").addEventListener("change", handleFileInputChange);
  </script>
@endsection