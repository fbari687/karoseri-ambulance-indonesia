@extends('layouts.main')

@section('content')
  <!-- Judul Model Start -->
  <section id="judul">
    <div class="container mx-auto">
      <div class="py-8 px-4 bg-gradient-to-br from-primary to-secondary">
        <h2 class="font-bold text-xl text-white lg:text-3xl">MODEL</h2>
        <span class="text-white text-sm">Model yang didukung Karoseri Ambulance Indonesia</span>
      </div>
    </div>
  </section>
  <!-- Judul Model End -->
  <!-- Model Section Start -->
  <section id="product" class="mt-4">
    <div class="container mx-auto">
      <div class="py-4 bg-slate-200 flex flex-col items-center justify-center gap-4 relative lg:hidden">
        <button type="button" id="dropdownBtnFilter" class="bg-primary py-2 px-4 rounded-lg">
          <span class="text-white text-base"><i class="fa-solid fa-filter fa-xs"></i> Filter</span>
        </button>
        <div id="dropdownFilter" class="hidden absolute top-16">
          <div class="px-4 py-4 bg-gray-100 flex flex-col items-start">
            <div class="flex flex-col gap-2">
              <h2 class="font-bold text-base border-l border-l-primary px-2">Sort By</h2>
              <form action="" class="flex flex-col gap-2 px-2">
                <label for="abjad" class="cursor-pointer"><input type="radio" name="sort" id="abjad" class="accent-primary" checked /> A-Z</label>
                <label for="newest" class="cursor-pointer"><input type="radio" name="sort" id="newest" class="accent-primary" /> Terbaru</label>
              </form>
            </div>
          </div>
        </div>
        <!-- Model Mobile Start -->
        <div class="w-full px-2 grid grid-cols-2 gap-4">
          @foreach ($cars as $car)
          <div class="flex flex-col items-center overflow-hidden rounded-xl bg-white border shadow-md-right">
            <a href="#">
              <div class="w-full">
                <img src="{{ asset('img/' . $car->image) }}" alt="{{ $car->name }}" />
              </div>
            </a>
            <div class="w-full h-36 p-2 flex flex-col items-center justify-between">
              <a href="#" class="w-full self-start">
                <h3 class="text-base text-primary font-bold text-center lg:text-xl">{{ $car->name }}</h3>
              </a>
              <a href="#" class="w-full self-end">
                <button type="button" class="w-full bg-secondary text-sm text-white py-2 px-4 rounded-md transition duration-150 hover:bg-orange-500 lg:text-base">Details Ambulance</button>
              </a>
            </div>
          </div>
          @endforeach
        </div>
        <!-- Model Mobile End -->
      </div>
      <!-- Model Desktop Start -->
      <div class="hidden w-full bg-white rounded-lg lg:flex gap-0">
        <div class="w-1/5 flex flex-col py-4 px-4 gap-4">
          <h2 class="text-2xl font-bold">Filter</h2>
          <div class="px-2 flex flex-col gap-1">
            <h3 class="pl-2 border-l-2 border-l-primary font-bold text-lg">Sort By</h3>
            <form action="" class="pl-2 flex flex-col gap-2">
              <label for="abjad" class="cursor-pointer"><input type="radio" name="sort" id="abjad" class="accent-primary" checked /> A-Z</label>
              <label for="abjad" class="cursor-pointer"><input type="radio" name="sort" id="abjad" class="accent-primary" /> Terbaru</label>
            </form>
          </div>
          <div class="px-2 flex flex-col gap-1">
            <h3 class="pl-2 border-l-2 border-l-primary font-bold text-lg">Berdasarkan Merk</h3>
            <form action="" class="pl-2 flex flex-col gap-2">
              <label for="daihatsu">
                <input type="checkbox" name="daihatsu" id="daihatsu" class="accent-primary" />
                Daihatsu ()
              </label>
              <label for="toyota">
                <input type="checkbox" name="toyota" id="toyota" class="accent-primary" />
                Toyota ()
              </label>
              <label for="honda">
                <input type="checkbox" name="honda" id="honda" class="accent-primary" />
                Honda ()
              </label>
              <label for="hyundai">
                <input type="checkbox" name="hyundai" id="hyundai" class="accent-primary" />
                Hyundai ()
              </label>
              <label for="mitsubishi">
                <input type="checkbox" name="mitsubishi" id="mitsubishi" class="accent-primary" />
                Mitsubishi ()
              </label>
              <button type="submit" class="mt-4 w-1/2 bg-secondary py-2 px-4 rounded-lg text-white transition duration-150 hover:bg-orange-600">Terapkan</button>
            </form>
          </div>
        </div>
        <div class="w-4/5 border-l border-l-divider p-4">
          <div class="w-full grid grid-cols-3 gap-4">
            @foreach ($cars as $car)
            <div class="flex flex-col items-center overflow-hidden rounded-xl bg-white border shadow-md-right">
              <a href="#">
                <div class="w-full">
                  <img src="{{ asset('img/' . $car->image) }}" alt="{{ $car->name }}" />
                </div>
              </a>
              <div class="w-full h-36 p-2 flex flex-col items-center justify-between">
                <a href="#" class="w-full self-start">
                  <h3 class="text-base text-primary font-bold text-center lg:text-xl">{{ $car->name }}</h3>
                </a>
                <a href="#" class="w-full self-end">
                  <button type="button" class="w-full bg-secondary text-sm text-white py-2 px-4 rounded-md transition duration-150 hover:bg-orange-500 lg:text-base">Details Ambulance</button>
                </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- Model Desktop End -->
    </div>
  </section>
  <!-- Model Section End -->
@endsection

@section('scriptjs')
<script>
  const dropdownT = document.getElementById("dropdownTrigger");
  const navM = document.getElementById("dropdownNav");
  const dropdownFilter = document.getElementById("dropdownFilter");
  const dropdownBtnFilter = document.getElementById("dropdownBtnFilter");

  dropdownT.addEventListener("click", () => navM.classList.toggle("hidden"));
  dropdownBtnFilter.addEventListener("click", () => dropdownFilter.classList.toggle("hidden"));
</script>
@endsection