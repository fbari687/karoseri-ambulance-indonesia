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
                <div class="w-full flex flex-col">
                  <div class="w-full flex">
                    <div class="w-2/3 border py-2 text-lg px-4 flex items-center gap-2">
                      <h5 class="uppercase">Deluxe</h5>
                      <button type="button" class="fa-solid fa-circle-info text-sky-500 informasi"></button>
                    </div>
                    <a href="" class="w-1/3 border py-2 text-center text-lg flex items-center justify-center">
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
                          <h1 class="text-3xl font-bold">DELUXE</h1>
                          <div class="self-start">
                            <h3 class="text-lg">Deskripsi :</h3>
                            <ul class="pl-8 list-disc text-sm text-justify">
                              <li>Lampu LED Light Bar Oval LTF 2200</li>
                              <li>Sirene multi suara lengkap dengan microphone</li>
                              <li>Tempat duduk perawat dilengkapi dengan box peralatan</li>
                              <li>Landasan strecher dilengkapi dengan tempat scoop stretcher</li>
                              <li>Tabung pemadam kebakaran kapasitas 1 Kg</li>
                              <li>Lampu sorot belakang model spot light</li>
                              <li>2 (dua) buah lampu operasi</li>
                              <li>Modifikasi lantai dari polywood dilapis dengan vinyl</li>
                              <li>Logo dan tulisan standard</li>
                              <li>Kaca film 60% - 80%</li>
                              <li>Lemari peralatan dengan finishing acrylic</li>
                              <li>Gantungan infus model geser dari bahan stainless steel</li>
                              <li>Pelindung bamper belakang mobil bahan plat stainless steel</li>
                              <li>Extra DC plus USB port</li>
                            </ul>
                            <h3 class="text-lg font-bold">+ Central oxygen BSS system :</h3>
                            <ul class="pl-8 list-disc text-sm text-justify">
                              <li>2 buah Tabung oksigen 1 m³</li>
                              <li>2 buah Regulator Standar</li>
                              <li>1 set Selang Oksigen tekanan tinggi dengan sistem press</li>
                              <li>1 set Pengatur Oksigen dengan kran On / Off</li>
                              <li>1 buah keluaran dinding dengan tulisan “OXYGEN”</li>
                              <li>1 set Flowmeter dan Humidifier</li>
                              <li>1 buah Nasal Cannula</li>
                              <li>1 buah Masker Oksigen</li>
                              <li>Stretcher Roll In cot Kontruksi Rangka Allumunium Lengkap dengan Matress dan Strap Scoop Stretcher</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full flex flex-col">
                  <div class="w-full flex">
                    <div class="w-2/3 border py-2 text-lg px-4 flex items-center gap-2">
                      <h5 class="uppercase">Standar</h5>
                      <button type="button" class="fa-solid fa-circle-info text-sky-500 informasi"></button>
                    </div>
                    <a href="" class="w-1/3 border py-2 text-center text-lg flex items-center justify-center">
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
                          <h1 class="text-3xl font-bold">STANDAR</h1>
                          <div class="self-start">
                            <h3 class="text-lg">Deskripsi :</h3>
                            <ul class="pl-8 list-disc text-sm text-justify">
                              <li>Lampu LED Light Bar Oval LTF 2200</li>
                              <li>Sirene multi suara lengkap dengan microphone</li>
                              <li>Tempat duduk perawat dilengkapi dengan box peralatan</li>
                              <li>Landasan strecher dilengkapi dengan tempat scoop stretcher</li>
                              <li>Tabung pemadam kebakaran kapasitas 1 Kg</li>
                              <li>Lampu sorot belakang model spot light</li>
                              <li>2 (dua) buah lampu operasi</li>
                              <li>Modifikasi lantai dari polywood dilapis dengan vinyl</li>
                              <li>Logo dan tulisan standard</li>
                              <li>Kaca film 60% - 80%</li>
                              <li>Lemari peralatan dengan finishing acrylic</li>
                              <li>Gantungan infus model geser dari bahan stainless steel</li>
                              <li>Pelindung bamper belakang mobil bahan plat stainless steel</li>
                            </ul>
                            <h3 class="text-lg font-bold">+ Central oxygen BSS system :</h3>
                            <ul class="pl-8 list-disc text-sm text-justify">
                              <li>2 buah Tabung oksigen 1 m³</li>
                              <li>2 buah Regulator Standar</li>
                              <li>1 set Selang Oksigen tekanan tinggi dengan sistem press</li>
                              <li>1 set Pengatur Oksigen dengan kran On / Off</li>
                              <li>1 buah keluaran dinding dengan tulisan “OXYGEN”</li>
                              <li>1 set Flowmeter dan Humidifier</li>
                              <li>1 buah Nasal Cannula</li>
                              <li>1 buah Masker Oksigen</li>
                              <li>Automatic Stretcher Roll In Cot kontruksi rangka allumunium Lengkap dengan Matress dan Strap</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full flex flex-col">
                  <div class="w-full flex">
                    <div class="w-2/3 border py-2 text-lg px-4 flex items-center gap-2">
                      <h5 class="uppercase">Standard 1</h5>
                      <button type="button" class="fa-solid fa-circle-info text-sky-500 informasi"></button>
                    </div>
                    <a href="" class="w-1/3 border py-2 text-center text-lg flex items-center justify-center">
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
                          <h1 class="text-3xl font-bold">STANDARD 1</h1>
                          <div class="self-start">
                            <h3 class="text-lg">Deskripsi :</h3>
                            <ul class="pl-8 list-disc text-sm text-justify">
                              <li>Lampu LED Light Bar Oval LTF 2200</li>
                              <li>Sirene multi suara lengkap dengan microphone</li>
                              <li>Tempat duduk perawat dilengkapi dengan box peralatan</li>
                              <li>Landasan strecher dilengkapi dengan tempat scoop stretcher</li>
                              <li>Tabung pemadam kebakaran kapasitas 1 Kg</li>
                              <li>Lampu sorot belakang model spot light</li>
                              <li>2 (dua) buah lampu operasi</li>
                              <li>Modifikasi lantai dari polywood dilapis dengan vinyl</li>
                              <li>Logo dan tulisan standard</li>
                              <li>Kaca film 60% - 80%</li>
                              <li>Kota P3K / Kota obat-obatan</li>
                              <li>Gantungan infus model geser dari bahan stainless steel</li>
                              <li>Pelindung bamper belakang mobil bahan plat stainless steel</li>
                            </ul>
                            <h3 class="text-lg font-bold">+ Oxygen Set :</h3>
                            <ul class="pl-8 list-disc text-sm text-justify">
                              <li>1 buah Tabung oksigen 1 m³</li>
                              <li>1 buah Regulator Standar</li>
                              <li>1 set Flowmeter dan Humidifier</li>
                              <li>1 buah Nasal Cannula</li>
                              <li>1 buah Masker Oksigen</li>
                              <li>Automatic Stretcher Roll In Cot kontruksi rangka allumunium Lengkap dengan Matress dan Strap</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full flex flex-col">
                  <div class="w-full flex">
                    <div class="w-2/3 border py-2 text-lg px-4 flex items-center gap-2">
                      <h5 class="uppercase">Ekonomi</h5>
                      <button type="button" class="fa-solid fa-circle-info text-sky-500 informasi"></button>
                    </div>
                    <a href="" class="w-1/3 border py-2 text-center text-lg flex items-center justify-center">
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
                          <h1 class="text-3xl font-bold">EKONOMI</h1>
                          <div class="self-start">
                            <h3 class="text-lg">Deskripsi :</h3>
                            <ul class="pl-8 list-disc text-sm text-justify">
                              <li>Lampu LED Light Bar Oval LTF 2200</li>
                              <li>Sirene multi suara lengkap dengan microphone</li>
                              <li>Tempat duduk perawat dilengkapi dengan box peralatan</li>
                              <li>Tabung pemadam kebakaran kapasitas 1 Kg</li>
                              <li>Lampu sorot belakang model spot light</li>
                              <li>2 (dua) buah lampu operasi model geser</li>
                              <li>Modifikasi lantai dari polywood dilapis dengan vinyl</li>
                              <li>Logo dan tulisan standard</li>
                              <li>Kaca film 60% - 80%</li>
                              <li>Kota P3K / Kota obat-obatan</li>
                              <li>Gantungan infus model geser dari bahan stainless steel</li>
                            </ul>
                            <h3 class="text-lg font-bold">+ Oxygen Set :</h3>
                            <ul class="pl-8 list-disc text-sm text-justify">
                              <li>1 buah Tabung oksigen 1 m³</li>
                              <li>1 buah Regulator Standar</li>
                              <li>1 set Flowmeter dan Humidifier</li>
                              <li>1 buah Nasal Cannula</li>
                              <li>1 buah Masker Oksigen</li>
                              <li>Automatic Stretcher Roll In Cot kontruksi rangka allumunium Lengkap dengan Matress dan Strap</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full flex flex-col">
                  <div class="w-full flex">
                    <div class="w-2/3 border py-2 text-lg px-4 flex items-center gap-2">
                      <h5 class="uppercase">Jenazah</h5>
                      <button type="button" class="fa-solid fa-circle-info text-sky-500 informasi"></button>
                    </div>
                    <a href="" class="w-1/3 border py-2 text-center text-lg flex items-center justify-center">
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
                          <h1 class="text-3xl font-bold">JENAZAH</h1>
                          <div class="self-start">
                            <h3 class="text-lg">Deskripsi :</h3>
                            <ul class="pl-8 list-disc text-sm text-justify">
                              <li>Lampu LED Light Bar Oval LTF 2200</li>
                              <li>Sirene multi suara lengkap dengan microphone</li>
                              <li>Tempat duduk perawat dilengkapi dengan box peralatan</li>
                              <li>Tabung pemadam kebakaran kapasitas 1 Kg</li>
                              <li>Lampu sorot belakang model spot light</li>
                              <li>Modifikasi lantai dari polywood dilapis dengan vinyl</li>
                              <li>Logo dan tulisan standard</li>
                              <li>Kaca film 60% - 80%</li>
                              <li>Keranda Jenazah kontruksi rangka full Stainles Steel sekaligus Kain penutup warna hijau</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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