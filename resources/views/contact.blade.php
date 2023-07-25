@extends('layouts.main')

@section('content')
  <!-- Judul Start -->
  <section id="judul">
    <div class="container mx-auto">
      <div class="py-4 px-4 bg-secondary">
        <h2 class="font-bold text-xl text-white lg:text-3xl">Kontak</h2>
      </div>
    </div>
  </section>
  <!-- Judul End -->
  <!-- Main Section Start -->
  <section id="main">
    <div class="container mx-auto">
      <div class="px-2 grid grid-cols-1 justify-center lg:grid-cols-2">
        <div class="hidden lg:flex">
          <div class="flex items-center">
            <img src="{{ asset('img/icon.png') }}" alt="" />
          </div>
        </div>
        <div class="my-10 flex flex-col items-center gap-4 lg:items-start">
          <h2 class="font-bold text-xl text-primary pb-4 border-b-2 border-b-primary">Hubungi Kami</h2>
          <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
            <a href="https://wa.me/6281287624559?text=Assalamu'alaikum, Saya pengunjung website https://karoseri-ambulan.id, saya ingin informasi terbaru tentang karoseri ambulance">
              <div class="flex items-center gap-2">
                <div class="bg-[#25d366] py-3 px-4 rounded-full"><i class="fa-brands fa-whatsapp fa-lg text-white"></i></div>
                <div class="flex flex-col">
                  <h4 class="font-bold text-lg">081287624559</h4>
                  <h5 class="text-sm">a.n Ahmad Zikri</h5>
                </div>
              </div>
            </a>
            <a href="tel:+6281287624559">
              <div class="flex items-center gap-2">
                <div class="bg-secondary py-3 px-4 rounded-full"><i class="fa-solid fa-phone fa-lg text-white"></i></div>
                <div class="flex flex-col">
                  <h4 class="font-bold text-lg">081287624559</h4>
                  <h5 class="text-sm">a.n Ahmad Zikri</h5>
                </div>
              </div>
            </a>
            <a href="https://web.facebook.com/profile.php?id=100009868959328">
              <div class="flex items-center gap-2">
                <div class="bg-secondary py-3 px-4 rounded-full"><i class="fa-brands fa-facebook fa-lg text-white"></i></div>
                <h4 class="font-bold text-lg">Rahmat Al Amin</h4>
              </div>
            </a>
            <a href="mailto:alaminrahmat@gmail.com">
              <div class="flex items-center gap-2">
                <div class="bg-secondary py-3 px-4 rounded-full"><i class="fa-solid fa-envelope fa-lg text-white"></i></div>
                <h4 class="font-bold text-lg">alaminrahmat@gmail.com</h4>
              </div>
            </a>
          </div>
          <h2 class="mt-6 font-bold text-xl text-primary pb-4 border-b-2 border-b-primary">Lokasi Kami</h2>
          <div class="pt-2 px-4 flex flex-col gap-4">
            <h3 class="text-justify font-bold">Jl. Griya Asri Bahagia, Bahagia, Kec. Babelan, Kabupaten Bekasi, Jawa Barat 17610</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.717198878805!2d107.0245023!3d-6.1736737!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69894a3b26f3c9%3A0xd1041d4cde894037!2sPT.%20Ambulance%20Pintar%20Indonesia%20Official%20%2F%2F%20Jual%20Mobil%20Ambulance%20Ready%20Stock!5e0!3m2!1sen!2sid!4v1690107478737!5m2!1sen!2sid" class="w-full h-72" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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