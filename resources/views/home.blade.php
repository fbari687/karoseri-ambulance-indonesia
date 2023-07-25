@extends('layouts.main')

@section('externalcss')
  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
@endsection

@section('content')
  <!-- Hero Section Start -->
  <section id="hero" class="w-full" data-aos="fade-down" data-aos-duration="1000">
    <div class="container mx-auto">
      <div id="hero-carousel" class="splide" role="group">
        <div class="splide__track">
          <ul class="splide__list">
            @foreach ($carousels as $carousel)
            <li class="splide__slide">
              <img src="{{ asset('storage/'.$carousel->image) }}" alt="" />
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->
  <!-- Keunggulan Section Start -->
  <section id="keunggulan" class="w-full" data-aos="zoom-in" data-aos-duration="1000">
    <div class="container mx-auto mt-8">
      <div class="px-8 py-8 bg-white flex flex-col gap-16">
        <div class="w-full flex items-center justify-center">
          <h3 class="pb-4 text-3xl text-center font-bold border-b-2 border-b-secondary lg:text-4xl">Mengapa Harus Menggunakan Jasa <span class="text-secondary font-bold">KAI</span>?</h3>
        </div>
        <div class="flex flex-col gap-14 items-center lg:flex-row lg:items-start">
          <div class="w-full py-2 px-1 flex flex-col items-center gap-6 font-bold lg:w-1/4">
            <i class="fa-solid fa-truck-fast fa-2xl text-secondary"></i>
            <div class="flex flex-col gap-2">
              <h3 class="text-xl font-bold text-center text-tertiary">Pengiriman ke Seluruh Indonesia</h3>
              <p class="text-base text-center font-normal"><span class="text-secondary font-bold">KAI</span> memberikan layanan pengiriman pesanan melalui Ekspedisi Kargo ke Seluruh Indonesia.</p>
            </div>
          </div>
          <div class="w-full py-2 px-1 flex flex-col items-center gap-6 font-bold lg:w-1/4">
            <i class="fa-solid fa-car fa-2xl text-secondary"></i>
            <div class="flex flex-col gap-2">
              <h3 class="text-xl font-bold text-center text-tertiary">Banyak Tipe Karoseri</h3>
              <p class="text-base text-center font-normal"><span class="text-secondary font-bold">KAI</span> Melayani pembuatan mobil promkes, mobil X-Ray, mobil dental, mobil donor darah, dan mobil pusling, food Truck, Bus, Dll.</p>
            </div>
          </div>
          <div class="w-full py-2 px-1 flex flex-col items-center gap-6 font-bold lg:w-1/4">
            <i class="fa-solid fa-shield-halved fa-2xl text-secondary"></i>
            <div class="flex flex-col gap-2">
              <h3 class="text-xl font-bold text-center text-tertiary">Produk Berkualitas tinggi</h3>
              <p class="text-base text-center font-normal">Produk <span class="text-secondary font-bold">KAI</span> dibuat dengan bahan dan kualitas yang terjamin, sehingga menghasilkan produk terbaik yang memiliki ketahanan tinggi.</p>
            </div>
          </div>
          <div class="w-full py-2 px-1 flex flex-col items-center gap-6 font-bold lg:w-1/4">
            <i class="fa-solid fa-award fa-2xl text-secondary"></i>
            <div class="flex flex-col gap-2">
              <h3 class="text-xl font-bold text-center text-tertiary">Pengalaman Lebih Dari 10 Tahun</h3>
              <p class="text-base text-center font-normal"><span class="text-secondary font-bold">KAI</span> telah menjalani aktivitas produksi sejak tahun 2003.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Keunggulan Section End -->
  <!-- Model Section Start -->
  <section id="model" class="w-full" data-aos="zoom-in" data-aos-duration="1000">
    <div class="container mx-auto">
      <div class="pt-6 px-4 flex flex-col gap-4">
        <div class="flex items-center justify-between">
          <h3 class="font-bold text-xl lg:text-3xl">Daftar Model</h3>
          <a href="/cars" class="self-end">
            <h3 class="text-sky-500 text-sm transition duration-150 hover:text-sky-600">Lihat Semua Model</h3>
          </a>
        </div>
        <div class="w-full">
          <div id="model-carousel" class="splide" role="group">
            <div class="splide__track py-4">
              <ul class="splide__list">
                @foreach ($cars as $car)  
                <li class="splide__slide">
                  <div class="flex flex-col items-center overflow-hidden rounded-xl bg-white border shadow-md-right">
                    <a href="/cars/{{ $car->slug }}">
                      <div class="w-full">
                        <img src="{{ asset('storage/'. $car->image) }}" alt="" />
                      </div>
                    </a>
                    <div class="w-full h-28 p-2 flex flex-col items-center justify-between">
                      <a href="/cars/{{ $car->slug }}" class="w-full self-start">
                        <h3 class="text-base text-primary font-bold text-center lg:text-xl">{{ $car->name }}</h3>
                      </a>
                      <a href="/cars/{{ $car->slug }}" class="w-full self-end">
                        <button type="button" class="w-full bg-secondary text-sm text-white py-2 px-4 rounded-md transition duration-150 hover:bg-orange-500 lg:text-base">Details Ambulance</button>
                      </a>
                    </div>
                  </div>
                </li>
                @endforeach
                <li class="splide__slide border border-slate-300 flex justify-center items-center rounded-lg transition duration-150 shadow-md-right hover:bg-slate-400">
                  <a href="/cars" class="self-center hover:bg-slate-400">
                    <div class="p-3 w-full h-full bg-transparent flex flex-col gap-4 items-center justify-center">
                      <i class="fa-solid fa-angle-right fa-2xl"></i>
                      <span class="text-2xl">Lainnya</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Model Section End -->
  <!-- CTA Section Start -->
  <section id="cta" class="w-full" data-aos="flip-right" data-aos-duration="1000">
    <div class="container mx-auto mt-8">
      <div class="w-full p-8 grid grid-cols-1 gap-10 rounded-lg overflow-hidden bg-center bg-cover relative lg:grid-cols-2">
        <img src="{{ asset('img/bg-cta.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover blur-sm -z-20" />
        <div class="py-8 px-4 flex flex-col gap-8 items-center justify-center text-white">
          <h3 class="text-center font-bold text-2xl lg:text-4xl">Hubungi Kami</h3>
          <h4 class="text-center text-lg">"Maksimalkan potensi ambulans Anda dengan karoseri khusus dari PT. Karoseri Ambulance Indonesia"</h4>
          <a href="" class="px-10 py-4 bg-[#25d366] rounded-full flex items-center gap-4 transition duration-150 hover:bg-[#22be5b]">
            <i class="fa-brands fa-whatsapp fa-2xl"></i>
            <h3 class="text-lg font-bold">WhatsApp</h3>
          </a>
        </div>
        <div class="rounded-lg overflow-hidden flex items-center justify-center">
          <img src="{{ asset('img/cta-img.jpg') }}" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- CTA Section End -->
@endsection

@section('scriptjs')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-intersection@0.2.0/dist/js/splide-extension-intersection.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();

  const dropdownT = document.getElementById("dropdownTrigger");
  const navM = document.getElementById("dropdownNav");

  dropdownT.addEventListener("click", () => navM.classList.toggle("hidden"));

  new Splide("#hero-carousel", {
    type: "loop",
    autoplay: "pause",
    arrows: false,
    intersection: {
      inView: {
        autoplay: true,
      },
      outView: {
        autoplay: false,
      },
    },
  }).mount(window.splide.Extensions);

  new Splide("#model-carousel", {
    perPage: 4,
    breakpoints: {
      1024: {
        perPage: 2,
        arrows: false,
      },
    },
    gap: "8px",
    pagination: false,
  }).mount(window.splide.Extensions);
</script>
@endsection