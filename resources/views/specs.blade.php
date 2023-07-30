@extends('layouts.main')

@section('content')
  <!-- Judul Start -->
  <section id="judul">
    <div class="container mx-auto">
      <div class="py-4 px-4 bg-secondary">
        <h2 class="font-bold text-xl text-white lg:text-3xl">Spesifikasi</h2>
        <span class="text-dark text-sm">Macam-Macam Spesifikasi Karoseri Ambulance Indonesia</span>
      </div>
    </div>
  </section>
  <!-- Judul End -->
  <!-- List Spesifikasi Section Start -->
  <section id="spec">
    <div class="container mx-auto">
      <div class="p-4 grid grid-cols-1 gap-4 lg:grid-cols-3">
        @foreach ($specs as $spec)
        <div class="p-4 flex flex-col bg-slate-100 border border-divider rounded-md items-center gap-4">
          <h1 class="text-3xl font-bold uppercase">{{ $spec->name }}</h1>
          <div class="self-start text-sm">
            {!! $spec->body !!}
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- List Spesifikasi Section End -->
@endsection

@section('scriptjs')
<script>
  const dropdownT = document.getElementById("dropdownTrigger");
  const navM = document.getElementById("dropdownNav");

  dropdownT.addEventListener("click", () => navM.classList.toggle("hidden"));
</script>
@endsection