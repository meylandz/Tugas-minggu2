<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tugas Minggu 2 - Kelompok 2</title>
    
    <!-- Memanggil CSS menggunakan helper asset() Laravel -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}" />
  </head>
  
  <body>
    <!-- MENU NAVIGASI (Tambahan agar bisa pindah halaman) -->
   <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Tugas Kelompok 2</a>
        <!-- Tombol untuk tampilan HP -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/biodata">Biodata</a></li>
            <li class="nav-item"><a class="nav-link" href="/pendidikan">Pendidikan</a></li>
            <li class="nav-item"><a class="nav-link" href="/prestasi">Prestasi</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- TEMPAT KONTEN UTAMA (Akan diisi oleh view lain seperti home, biodata, dll) -->
    @yield('content')

    <!-- FOOTER BAWAAN TEMPLATE -->
    <div class="container-fluid mt-5">
      <div class="row">
        <footer class="col-12">
          <p class="text-center tm-copyright-text">
            Copyright 2019 Mini Profile Page 
            - Design: <a rel="nofollow" href="https://www.facebook.com/templatemo">TemplateMo</a>
          </p>
        </footer>
      </div>
    </div>

    <!-- SCRIPT BAWAAN TEMPLATE -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <!-- Tambahan JS Bootstrap untuk menu navigasi di mode HP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    
    <script>
      function detectMsBrowser() {
        using_ms_browser =
          navigator.appName == "Microsoft Internet Explorer" ||
          (navigator.appName == "Netscape" && navigator.appVersion.indexOf("Edge") > -1) ||
          (navigator.appName == "Netscape" && navigator.appVersion.indexOf("Trident") > -1);

        if (using_ms_browser == true) {
          alert("Please use Chrome or Firefox for the best browsing experience!");
        }
      }
      function setBrandMarginTop() {
        var bottomContainerHeight = $(".tm-welcome-container").height();
        $(".tm-brand-container-outer").css({
          "margin-top": -bottomContainerHeight + "px"
        });
      }

      $(function() {
        setBrandMarginTop();
        detectMsBrowser();

        $(window).resize(function() {
          setBrandMarginTop();
        });
      });
    </script>
  </body>
</html>