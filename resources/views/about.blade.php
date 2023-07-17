@extends('layouts.main')

@section('content')
  <!-- Judul Start -->
  <section id="judul">
    <div class="container mx-auto">
      <div class="py-8 px-4 bg-gradient-to-br from-primary to-secondary">
        <h2 class="font-bold text-xl text-white lg:text-3xl">Tentang Kami</h2>
        <span class="text-white text-sm">Mengetahui Lebih Dalam Tentang Karoseri Ambulance Indonesia</span>
      </div>
    </div>
  </section>
  <!-- Judul End -->
  <!-- Main Section Start -->
  <section id="main">
    <div class="container mx-auto">
      <div class="px-2 grid grid-cols-1 justify-center lg:grid-cols-2">
        <div class="flex items-center">
          <img src="{{ asset('img/icon.png') }}" alt="" />
        </div>
        <div class="my-16 flex flex-col items-center gap-4 lg:items-start">
          <h2 class="font-bold text-xl text-primary pb-4 border-b-2 border-b-primary">PT. Karoseri Ambulance Indonesia</h2>
          <p class="text-justify px-2 text-lg">
            <span class="font-bold">PT. Karoseri Ambulance Indonesia</span> adalah karoseri pertama di indonesia yang spesialis kesehatan, kami telah bekerja sama dengan seluruh Dinas Kesehatan se Indonesia dan Kementrian Kesehatan RI
            juga Kementrian terkait dengan pelayanan dan pengadaan mobil ambulance. Karoseri KAI berdiri sejak tahun 2013 dan sampai sekarang tetap eksis di pelayanan pengadaan ambulance untuk Indonesia sehat.
          </p>
          <p class="text-justify px-2 text-lg">
            Kami berkomitmen membantu pemerintah untuk pengadaan berbagai jenis ambulance dan mobil pelayanan kesehatan lainnya seperti mobil promkes, mobil X-Ray, mobil dental, mobil donor darah, dan mobil pusling, food Truck, Bus,
            Dll.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Section End -->
@endsection

@section('scriptjs')
<script>
  const dropdownT = document.getElementById("dropdownTrigger");
  const navM = document.getElementById("dropdownNav");

  dropdownT.addEventListener("click", () => navM.classList.toggle("hidden"));
</script>
@endsection