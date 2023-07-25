<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karoseri Ambulan Indonesia</title>
    @yield('externalcss')
    <link rel="icon" href="{{ asset('img/icon.jpg') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" /> --}}
    @vite('resources/css/app.css')
  </head>
  <body>
    <!-- Navbar Start -->
    @include('partials.navbar')
    <!-- Navbar End -->
    <!-- Content Start -->
    <section id="content" class="mt-[70px] mb-8">
      @yield('content')
    </section>
    <!-- Content End -->
    <!-- Footer Start -->
    @include('partials.footer')
    <!-- Footer End -->
    <!-- Bottom Bar Section Start -->
    @include('partials.bottombar')
    <!-- Bottom Bar Section End -->

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/e1744d5724.js" crossorigin="anonymous"></script>
    @yield('scriptjs')
  </body>
</html>
