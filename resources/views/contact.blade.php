@extends('layouts.main')

@section('content')
  <!-- Judul Start -->
  <section id="judul">
    <div class="container mx-auto">
      <div class="py-8 px-4 bg-gradient-to-br from-primary to-secondary">
        <h2 class="font-bold text-xl text-white lg:text-3xl">Kontak</h2>
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
          <h2 class="font-bold text-xl text-primary pb-4 border-b-2 border-b-primary">Hubungi Kami Disini</h2>
          <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
            <a href="">
              <div class="flex items-center gap-2">
                <div class="bg-[#25d366] py-3 px-4 rounded-full"><i class="fa-brands fa-whatsapp fa-lg text-white"></i></div>
                <div class="flex flex-col">
                  <h4 class="font-bold text-lg">081287624559</h4>
                  <h5 class="text-sm">a.n Ahmad Zikri</h5>
                </div>
              </div>
            </a>
            <a href="">
              <div class="flex items-center gap-2">
                <div class="bg-blue-500 py-3 px-4 rounded-full"><i class="fa-solid fa-phone fa-lg text-white"></i></div>
                <div class="flex flex-col">
                  <h4 class="font-bold text-lg">081287624559</h4>
                  <h5 class="text-sm">a.n Ahmad Zikri</h5>
                </div>
              </div>
            </a>
            <a href="">
              <div class="flex items-center gap-2">
                <div class="bg-gradient-to-bl from-[#fd1d1d] to-[#833ab4] py-3 px-4 rounded-full"><i class="fa-brands fa-instagram fa-lg text-white"></i></div>
                <h4 class="font-bold text-lg">@karoeseriAIndonesia</h4>
              </div>
            </a>
            <a href="">
              <div class="flex items-center gap-2">
                <div class="bg-[#00acee] py-3 px-4 rounded-full"><i class="fa-brands fa-twitter fa-lg text-white"></i></div>
                <h4 class="font-bold text-lg">karoeseriAIndonesia</h4>
              </div>
            </a>
            <a href="">
              <div class="flex items-center gap-2">
                <div class="bg-[#e5e500] py-3 px-4 rounded-full"><i class="fa-solid fa-envelope fa-lg text-white"></i></div>
                <h4 class="font-bold text-lg">alaminrahmat@gmail.com</h4>
              </div>
            </a>
            <a href="">
              <div class="flex items-center gap-2">
                <div class="bg-[#3b5998] py-3 px-4 rounded-full"><i class="fa-brands fa-facebook fa-lg text-white"></i></div>
                <h4 class="font-bold text-lg">karoeseriAIndonesia</h4>
              </div>
            </a>
          </div>
          <h2 class="mt-6 font-bold text-xl text-primary pb-4 border-b-2 border-b-primary">Lokasi Kami</h2>
          <div class="pt-2 px-4 flex flex-col gap-4">
            <h3 class="text-justify font-bold">Jl. Matraman Raya No.134, Kb. Manggis, Kec. Matraman, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13150</h3>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3987815814144!2d106.85758927583693!3d-6.211019660839766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f41d00000001%3A0x60f84aec09834f6c!2sBAZNAS%20Kantor%20Pusat%20(Badan%20Amil%20Zakat%20Nasional)!5e0!3m2!1sen!2sid!4v1688909532040!5m2!1sen!2sid"
              class="w-full h-72"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
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