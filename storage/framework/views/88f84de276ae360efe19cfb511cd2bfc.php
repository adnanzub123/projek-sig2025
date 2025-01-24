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
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2><span>Selamat datang di </span><span class="accent">SIG SUMUT</span></h2>
            <p>Ini adalah sebuah aplikasi website yang menampilkan peta provinsi Sumatera Utara untuk memenuhi tugas UAS mata kuliah Sistem Informasi Geografis</p>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 mb-xl-5">
            <img src="<?php echo e(asset('img/peta.png')); ?>" class="img-fluid rounded" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang aplikasi<br></h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-3">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <p> Sebuah portal informasi geografis terintegrasi untuk Provinsi Sumatera Utara. Kami menyediakan data spasial terkini dan komprehensif untuk mendukung kebutuhan informasi dan pengambilan keputusan berbasis lokasi.</p>
            <p>SIG Sumut dirancang sebagai solusi inovatif dalam pengelolaan dan penyebaran data geografis. Website ini memuat berbagai data spasial, seperti peta administrasi, infrastruktur, tata ruang, potensi sumber daya alam, hingga data lingkungan. Dengan demikian, SIG Sumut menjadi sumber informasi terpercaya untuk pemerintah, akademisi, pelaku usaha, dan masyarakat umum.</p>
          </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kelompok kami</h2>
        <p>Berikut ini adalah anggota kelompok mata kuliah SIG</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="<?php echo e(asset('img/team/pandu.jpg')); ?>" class="img-fluid" alt="">
              <h4>Domami Pandu Saputra</h4>
              <span>Frontend Development</span>
              <div class="social">
                <a href="https://www.facebook.com/domami.saputra/"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/domamipam/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/domami-p-a46770191/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="<?php echo e(asset('img/team/fendi.jpg')); ?>" class="img-fluid" alt="">
              <h4>Muhammad Efendi</h4>
              <span>Database Development</span>
              <div class="social">
                <a href="https://www.facebook.com/M-Fendi/"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/mhmdfndy___/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/muhammad-efendi-1017a0228/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="<?php echo e(asset('img/team/fitri.jpg')); ?>" class="img-fluid" alt="">
              <h4>Syita Dwi Safitri</h4>
              <span>UI/UX Development</span>
              <div class="social">
                <a href="https://www.facebook.com/syita.saffitry"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/xyzrstat_/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/syita-dwi-safitri-83b012228/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="<?php echo e(asset('img/team/adnan.jpg')); ?>" class="img-fluid" alt="">
              <h4>Zubair Adnan Arsyad</h4>
              <span>Fullstack Development</span>
              <div class="social">
                <a href="https://x.com/adnan1301"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.facebook.com/zubair.adnan.8/"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/a410n1/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/zubair-adnan-arsyad/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

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

  <!-- Preloader -->
  <div id="preloader"></div>

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
  <script src="<?php echo e(asset('js/main.js')); ?>"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\projectSig\resources\views/welcome.blade.php ENDPATH**/ ?>