<header>
  <nav class="w-full py-2 px-4 fixed top-0 left-0 bg-white border-b border-b-divider flex items-center justify-between lg:justify-around z-50">
    <div class="px-4">
      <a href="/">
        <img src="{{ asset('img/icon.png') }}" alt="" width="60" />
      </a>
    </div>
    <div class="relative px-4">
      <button id="dropdownTrigger" type="button" class="border py-1 px-4 lg:hidden">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div id="dropdownNav" class="hidden right-3 top-10 absolute w-64 text-black">
        <div class="px-4 py-2 max-w-[250px] w-full bg-dark flex flex-col gap-5 rounded-tl-lg rounded-b-lg items-center justify-center">
          <div class="px-2 text-white transition duration-150 hover:font-bold">
            <a href="/">
              <div class="w-full rounded-lg">Home</div>
            </a>
          </div>
          <div class="px-2 text-white transition duration-150 hover:font-bold">
            <a href="/cars?sortBy=latest">
              <div class="w-full rounded-lg">Model</div>
            </a>
          </div>
          <div class="px-2 text-white transition duration-150 hover:font-bold">
            <a href="/specs">
              <div class="w-full rounded-lg">Spesifikasi</div>
            </a>
          </div>
          <div class="px-2 text-white transition duration-150 hover:font-bold">
            <a href="/about">
              <div class="w-full rounded-lg">Tentang Kami</div>
            </a>
          </div>
          <div class="px-2 text-white transition duration-150 hover:font-bold">
            <a href="/contact">
              <div class="w-full rounded-lg">Kontak</div>
            </a>
          </div>
          <div class="w-full px-2 py-2 text-white bg-secondary rounded-md transition duration-150 text-center hover:font-bold">
            <a href="wa.me">
              <div class="w-full rounded-lg">Minta Penawaran</div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="hidden lg:flex gap-2">
      <a href="/" class="h-full group">
        <div class="py-2 px-5 text-lg transition duration-150 group-hover:bg-secondary group-hover:text-white rounded-md {{ Request::is('/') ? 'active-navbar' : '' }}">Beranda</div>
      </a>
      <a href="/cars?sortBy=latest" class="h-full group">
        <div class="py-2 px-5 text-lg transition duration-150 group-hover:bg-secondary group-hover:text-white rounded-md {{ Request::is('cars*') ? 'active-navbar' : '' }}">Model</div>
      </a>
      <a href="/specs" class="h-full group">
        <div class="py-2 px-5 text-lg transition duration-150 group-hover:bg-secondary group-hover:text-white rounded-md {{ Request::is('specs') ? 'active-navbar' : '' }}">Spesifikasi</div>
      </a>
      <a href="/about" class="h-full group">
        <div class="py-2 px-5 text-lg transition duration-150 group-hover:bg-secondary group-hover:text-white rounded-md {{ Request::is('about') ? 'active-navbar' : '' }}">Tentang Kami</div>
      </a>
      <a href="/contact" class="h-full group">
        <div class="py-2 px-5 text-lg transition duration-150 group-hover:bg-secondary group-hover:text-white rounded-md {{ Request::is('contact') ? 'active-navbar' : '' }}">Kontak</div>
      </a>
      <a href="https://wa.me/6281287624559?text=Assalamu'alaikum, Saya pengunjung website https://karoseri-ambulan.id, saya ingin minta penawaran" class="h-full group">
        <div class="py-2 px-5 text-lg transition duration-150 bg-secondary text-white group-hover:bg-[#d77d1c] rounded-md">Minta Penawaran</div>
      </a>
    </div>
  </nav>
</header>