<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kabupaten</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('css/main.css')}}" rel="stylesheet">
  
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
  <style>

  .map-container {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  #map { 
    height: 15cm;
    width: 35cm;    
  }
    </style>

</head>
<body class="index-page">
<header id="header" class="header fixed-top">

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <h1 class="sitename">SIG SUMUT</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/" class="active">Home<br></a></li>
            <li class="dropdown"><a href="#"><span>Peta tematik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="/populasi">Populasi</a></li>
                <li><a href="/desa">Jumalah Desa</a></li>
                <li><a href="/pensiunan">Jumlah Pensiunan</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Kota</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="/kota">Peta</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Kabupaten</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="/kabupaten">Peta</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Peta Kabupaten</h1>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
    <div class="map-container">
      <div id="map"></div>
    </div>


    </section><!-- /Starter Section Section -->

  </main>
  <footer id="footer" class="footer accent-background">


    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Kelompok SIG Sumut</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>
  
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <script>
        var map = L.map('map').setView([2.235, 98.536], 7);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 10,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var kabupaten = @json($kabupaten);
        kabupaten.forEach(function(kabupaten) {
          L.marker([kabupaten.latitude, kabupaten.longitude]).addTo(map).bindPopup(kabupaten.nama)
        });    
  </script>
</body>
</html>