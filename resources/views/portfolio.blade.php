@extends('layouts.main')

@section('externalcss')
<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
@endsection

@section('content')
<!-- Judul Start -->
<section id="judul">
  <div class="container mx-auto">
    <div class="py-8 px-4 bg-gradient-to-br from-primary to-secondary">
      <h2 class="font-bold text-xl text-white lg:text-3xl uppercase">Portfolio</h2>
      <span class="text-white text-sm">Foto Serah Terima</span>
    </div>
  </div>
</section>
<!-- Judul End -->
<!-- Content Start -->
<section id="main">
  <div class="container mx-auto">
    <div class="p-1 grid grid-cols-1 gap-4 lg:grid-cols-3 2xl:grid-cols-4">
      @for ($i = 1; $i <= 24; $i++)
      <a href="{{ asset('img/portfolio/ ('.$i.').jpg') }}" data-lightbox="roadtrip" class="h-64 bg-cover bg-center transition duration-150 hover:scale-110 hover:rotate-6" style="background-image: url('{{ asset('img/portfolio/ ('.$i.').jpg') }}')"></a>
      @endfor
    </div>
  </div>
</section>
<!-- Content End -->
@endsection

@section('scriptjs')
<script src="{{ asset('js/lightbox-plus-jquery.js') }}"></script>
<script>
  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'alwaysShowNavOnTouchDevices': true
  })
</script>
@endsection