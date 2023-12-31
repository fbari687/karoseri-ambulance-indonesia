<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="/admin/dashboard">
      <img src="{{ asset('img/icon.jpg') }}" class="navbar-brand-img h-100 rounded-circle" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">KAI Dashboard</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard') ? 'bg-gradient-primary' : ''}}" href="/admin/dashboard">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/brands*') ? 'bg-gradient-primary' : ''}}" href="/admin/dashboard/brands">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-medal"></i>
          </div>
          <span class="nav-link-text ms-1">Brand</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/specs*') ? 'bg-gradient-primary' : ''}}" href="/admin/dashboard/specs">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-scroll"></i>
          </div>
          <span class="nav-link-text ms-1">Spesifikasi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/cars*') ? 'bg-gradient-primary' : ''}}" href="/admin/dashboard/cars">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-car"></i>
          </div>
          <span class="nav-link-text ms-1">Model</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/carousels*') ? 'bg-gradient-primary' : ''}}" href="/admin/dashboard/carousels">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-images"></i>
          </div>
          <span class="nav-link-text ms-1">Carousel</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/portfolios*') ? 'bg-gradient-primary' : ''}}" href="/admin/dashboard/portfolios">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-image"></i>
          </div>
          <span class="nav-link-text ms-1">Portfolio</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/contacts*') ? 'bg-gradient-primary' : ''}}" href="/admin/dashboard/contacts">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-address-book"></i>
          </div>
          <span class="nav-link-text ms-1">Contact</span>
        </a>
      </li>
    </ul>
  </div>
</aside>