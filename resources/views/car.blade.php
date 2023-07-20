@extends('layouts.main')

@section('content')
  <!-- Main Start -->
  <section id="main">
    <div class="container w-full mx-auto">
      <div class="w-full grid grid-cols-1 gap-5">
        <div class="w-full flex flex-col gap-5">
          <img src="{{ asset('img/' . $car->image) }}" alt="product" class="w-full" />
          <h6 class="px-3 uppercase text-primary text-xs">
            <a href="/"><span class="text-dark">home</span></a> // <a href="/cars"><span class="text-dark">model</span></a> // <a href="/cars/{{ $car->slug }}"><span class="text-dark">{{ $car->name }}</span></a>
          </h6>
          <h2 class="px-3 text-primary font-bold italic text-4xl lg:text-5xl">{{ $car->name }}</h2>
        </div>
        <!-- Spesifikasi Start -->
        <div class="w-full flex flex-col gap-5 py-8 lg:px-0 bg-slate-100">
          <h3 class="w-full text-2xl font-bold px-3">Spesifikasi Yang Ditawarkan</h3>
          <div class="w-full px-2">
            <div class="w-full flex flex-col bg-white">
              <div class="w-full flex">
                <div class="w-2/3 border py-2 text-center font-bold text-lg">Spesifikasi</div>
                <div class="w-1/3 border py-2 text-center font-bold text-lg">Harga</div>
              </div>
              <div class="w-full flex flex-col">
                @foreach ($car->specs as $spec)
                  
                <div class="w-full flex flex-col">
                  <div class="w-full flex">
                    <div class="w-2/3 border py-2 text-lg px-4 flex items-center gap-2">
                      <h5 class="uppercase">{{ $spec->name }}</h5>
                      <button type="button" class="fa-solid fa-circle-info text-sky-500 informasi"></button>
                    </div>
                    <a href="https://wa.me/6285770080452?text=Assalamu'alaikum, Saya pengunjung website https://karoseri-ambulan.id, saya ingin informasi tentang Ambulance *{{ $car->name }}* dengan spesifikasi *{{ $spec->name }}*" class="w-1/3 border py-2 text-center text-lg flex items-center justify-center" target="_blank">
                      <div class="flex items-center gap-2 bg-[#25d366] text-white justify-center py-1 px-2 rounded-full transition duration-150 hover:bg-[#22be5b]">
                        <i class="fa-brands fa-whatsapp"></i>
                        <h5>Hubungi</h5>
                      </div>
                    </a>
                  </div>
                  <div class="hidden w-full border">
                    <div class="w-full p-1 flex">
                      <div class="mx-auto">
                        <div class="p-4 flex flex-col bg-slate-100 border border-divider rounded-md items-center gap-4">
                          <h1 class="text-3xl font-bold uppercase">{{ $spec->name }}</h1>
                          <div class="self-start text-sm">
                            {!! $spec->body !!}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <!-- Spesifikasi End -->
      </div>
    </div>
  </section>
  <!-- Main End -->
@endsection

@section('scriptjs')
<script>
  const dropdownT = document.getElementById("dropdownTrigger");
  const navM = document.getElementById("dropdownNav");

  dropdownT.addEventListener("click", () => navM.classList.toggle("hidden"));

  const infoBtn = document.querySelectorAll(".informasi");

  infoBtn.forEach((e) => {
    e.addEventListener("click", function () {
      let infoDesc = this.parentElement.parentElement.nextElementSibling;
      infoDesc.classList.toggle("hidden");
    });
  });
</script>
@endsection