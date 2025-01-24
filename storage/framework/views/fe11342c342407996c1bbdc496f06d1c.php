<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Beranda</title>
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
  <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
  
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
  .legend {
    line-height: 18px;
    color: #555;

  }
    .legend i {
      width: 18px;
      height: 18px;
      float: left;
      margin-right: 8px;
      opacity: 0.7;
  }
  .info {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
    }
    .info h4 {
        margin: 0 0 5px;
        color: #777;
    }
    .legend {
    line-height: 18px;
    color: #555;
    }
    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 0.7;
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
              <h1>Peta Populasi</h1>
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

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>

  <!-- Main JS File -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <script>
        var map = L.map('map').setView([1.7153951,99.2617592], 7);

        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const regencies = <?php echo json_encode($populasi, 15, 512) ?>;

        console.log(regencies);

        const regenciesData = regencies.map(regency => ({
            type : "Feature",
            properties:{
                name : regency.nama,
                penduduk: regency.penduduk,
            },
            geometry: {
                type : regency.type,
                coordinates : JSON.parse(regency.polygon),
            }
        }));

        const geoJson = {
            type : "FeatureCollection",
            features : regenciesData,
        };

        console.log(geoJson);

        function getColor(d) {
            return d > 1000 ? '#800026' :
                d > 500  ? '#BD0026' :
                d > 200  ? '#E31A1C' :
                d > 100  ? '#FC4E2A' :
                d > 50   ? '#FD8D3C' :
                d > 20   ? '#FEB24C' :
                d > 10   ? '#FED976' :
                            '#FFEDA0';
        }

        function style(feature) {
            return {
                fillColor: getColor(feature.properties.penduduk),
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        function highlightFeature(e) {
            var layer = e.target;

            layer.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer.bringToFront();
            info.update(layer.feature.properties);
        }

        function resetHighlight(e) {
            geojson.resetStyle(e.target);
            info.update();
        }

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }

        var info = L.control();

        info.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
            this.update();
            return this._div;
        };

        // method that we will use to update the control based on feature properties passed
        info.update = function (props) {
            this._div.innerHTML = '<h4>Jumlah Penduduk sumut</h4>' +  (props ?
                '<b>' + props.name + '</b><br />' + props.penduduk + ' jiwa'
                : 'arahkan kursor ke wilayah');
        };

        info.addTo(map);

        var legend = L.control({position: 'bottomright'});

        legend.onAdd = function (map) {

            var div = L.DomUtil.create('div', 'info legend'),
                grades = [0, 10, 20, 50, 100, 200, 500, 1000],
                labels = [];

            // loop through our density intervals and generate a label with a colored square for each interval
            for (var i = 0; i < grades.length; i++) {
                div.innerHTML +=
                    '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
                    grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
            }

            return div;
        };

        legend.addTo(map);

        var geojson;
        geojson = L.geoJSON(geoJson, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(map);
    </script>

</body>

</html><?php /**PATH C:\xampp\htdocs\projectSig\resources\views/populasi.blade.php ENDPATH**/ ?>