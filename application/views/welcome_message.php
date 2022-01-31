<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id">
<head>
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<meta charset="utf-8">

	<!-- Icons -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="assets/favicon/site.webmanifest">

	<!-- Styling  -->
	<link rel="stylesheet" href="<?= base_url('assets/css/fontawesome.css') ?>">
  <link rel="stylesheet" href="assets/css/style.css">

	<title>Toko Matrix | Electrical Mega Store</title>
</head>
<body>
    <div class='container'>
		<div class='row'>

		</div>
	</div>
</body>
	<div class="preloader">
		<img src="assets/images/loading-logo.png" alt="image">
	</div>
<body>
  <header class="header header-1">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__logo">
          <a href="<?= site_url() ?>">
            <img 
							src="<?= base_url('assets/images/footer-logo.png') ?>" 
							alt="Logo Toko Matrix" 
							title='Logo Toko Matrix'>
          </a>
        </div>
				<!-- Top Navigation Bar -->
        <div class="header__nav">
          <ul class="header__nav-primary">
            <li class="nav__dropdown dropdown-wrapper" id="menu-1">
              <a href="<?= site_url() ?>" class="nav__dropdown-info dropdown-info">
                Home
              </a>
            </li>
            <li><a href="#video">About</a></li>
						<li><a href="#video">Products</a></li>
						<li><a href="#video">Contact</a></li>
          </ul>
					<span><i class="fas fa-times"></i></span>
        </div>
				<!-- End of Top Navigation Bar -->
        <div class="header__bars">
          <div class="header__bars-bar header__bars-bar-1"></div>
          <div class="header__bars-bar header__bars-bar-2"></div>
          <div class="header__bars-bar header__bars-bar-3"></div>
        </div>
      </div>
    </div>
  </header>

  <!--hero section start-->
  <section class="hero">
    <div class="hero__wrapper">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-lg-6 order-2 order-lg-1">
            <h1 class="main-heading color-black">Toko Listrik Terbesar dan Terlengkap</h1>
            <p class="paragraph">Toko Matrix merupakan toko elektrikal berlokasi di Kota Mataram, Lombok, menjamin keperluan elektrikal anda dengan barang bermutu tinggi dan pelayanan terbaik.</p>
            <div class="download-buttons">
              <a href="#" class="google-play">
                <div class="button-content">
                  <p class='h3 text-white'>Pelajari Lebih Lanjut</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <div class="questions-img hero-img">
              <img src="<?= base_url('assets/images/phone-01.png') ?>" alt="image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--hero section end-->

  <!--feature section start-->
  <section class="feature" id="intro">
    <div class="container">
      <h2 class="section-heading color-black">Produk Kami</h2>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="feature__box feature__box--1">
            <div class="icon icon-1">
              <img src='<?= base_url('assets/images/Extrana.png') ?>' style='width:8rem;height;8rem' alt='Extrana Cable Logo' title="Extrana Cable Logo">
            </div>
            <div class="feature__box__wrapper">
              <div class="feature__box--content feature__box--content-1">
                <h3>Extrana Cable</h3>
                <p class="paragraph dark">Kabel listrik nasional dengan sertifikasi SNI, LMK, dan SPLN dan bergaransi.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature__box feature__box--2">
            <div class="icon icon-2">
							<img src='<?= base_url('assets/images/Philips.png') ?>' style='width:8rem;height;8rem' alt='Philips Logo' title="Philips Logo">
            </div>
            <div class="feature__box__wrapper">
              <div class="feature__box--content feature__box--content-2">
                <h3>Philips Lighting</h3>
                <p class="paragraph dark">Bola lampu LED dengan kualitas tinggi dan <i>range product</i> yang beragam.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature__box feature__box--3">
            <div class="icon icon-3">
							<img src='<?= base_url('assets/images/Schneider.png') ?>' style='width:8rem;height;8rem' alt='Schneider Electric Logo' title="Schneider Electric Logo">
            </div>
            <div class="feature__box__wrapper">
              <div class="feature__box--content feature__box--content-3">
                <h3>Schneider Electric</h3>
                <p class="paragraph dark">Komponen elektrikal asal Eropa yang mengedepankan mutu, keamanan, dan tentunya estetik produk.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature__box feature__box--4">
            <div class="icon icon-4">
							<img src='<?= base_url('assets/images/Legrand.png') ?>' style='width:8rem;height;8rem' alt='Legrand Logo' title="Legrand Logo">
            </div>
            <div class="feature__box__wrapper">
              <div class="feature__box--content feature__box--content-4">
                <h3>Legrand</h3>
                <p class="paragraph dark">Komponen elektrikal rumahan seperti saklar dan stopkontak.</p>
              </div>
            </div>
          </div>
        </div>
				<div class='col-12 text-center my-5'>
					<a class='h2 w-100 text-secondary text-decoration-none' href='<?= site_url("Products") ?>'>Lihat produk kami selengkapnya.</a>
				</div>
      </div>
    </div>
  </section>
  <!--feature section end-->

  <!--step section start-->
  <section class="step">
    <div class="step__wrapper">
      <div class="container">
        <h2 class="section-heading color-black">Belanja Kebutuhan Elektrikal Menjadi Mudah</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="step__box">
              <div class="image">
                <img src="assets/images/phone-01.png" alt="image">
              </div>
              <div class="content">
                <h3>EASY TO<span>Register.</span></h3>
                <p class="paragraph dark">Join the app in 3 easy steps and get
                  started with your progresso daily.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="step__box">
              <div class="image">
                <img src="assets/images/phone-02.png" alt="image">
              </div>
              <div class="content">
                <h3>SIMPLE TO<span>Create.</span></h3>
                <p class="paragraph dark">Once you’re signed up you can create
                  as many polls you want to watch.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="step__box">
              <div class="image">
                <img src="assets/images/phone-03.png" alt="image">
              </div>
              <div class="content">
                <h3>FUN TO<span>Measure.</span></h3>
                <p class="paragraph dark">Share your growth results with your
                  friends and inspre others.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="button__wrapper">
            <a href="#" class="button">
              <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>
            </a>
            <a href="#" class="button">
              <span>LEARN MORE <i class="fad fa-long-arrow-right"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--step section end-->

  <!--client section start-->
  <section class="clients-sec" id="feedback">
    <div class="container">
      <h2 class="section-heading color-black">Hear from what others had to say.</h2>
      <div class="testimonial__wrapper">
        <div class="client client-01 active">
          <div class="image">
            <img src="assets/images/testimonial-img-01.png" alt="image">
          </div>
          <div class="testimonial">
            <div class="testimonial__wrapper">
              <p>“One Hath. Second. Kind them you fourth, fly brought. Give very let. Dominion wherein after can't fill,
                unto brought waters air. And our Beast won't dry there have after it. You have herb shall creeping bring
                sixth tree she'd open.”</p>
              <h4>— DAVID SPADE</h4>
            </div>
          </div>
        </div>
        <div class="client client-02">
          <div class="image">
            <img src="assets/images/testimonial-img-02.png" alt="image">
          </div>
          <div class="testimonial">
            <div class="testimonial__wrapper">
              <p>“One Hath. Second. Kind them you fourth, fly brought. Give very let. Dominion wherein after can't fill,
                unto brought waters air. And our Beast won't dry there have after it. You have herb shall creeping bring
                sixth tree she'd open.”</p>
              <h4>— DAVID SPADE</h4>
            </div>
          </div>
        </div>
        <div class="client client-03">
          <div class="image">
            <img src="assets/images/testimonial-img-03.png" alt="image">
          </div>
          <div class="testimonial">
            <div class="testimonial__wrapper">
              <p>“One Hath. Second. Kind them you fourth, fly brought. Give very let. Dominion wherein after can't fill,
                unto brought waters air. And our Beast won't dry there have after it. You have herb shall creeping bring
                sixth tree she'd open.”</p>
              <h4>— DAVID SPADE</h4>
            </div>
          </div>
        </div>
        <div class="client client-04">
          <div class="image">
            <img src="assets/images/testimonial-img-04.png" alt="image">
          </div>
          <div class="testimonial">
            <div class="testimonial__wrapper">
              <p>“One Hath. Second. Kind them you fourth, fly brought. Give very let. Dominion wherein after can't fill,
                unto brought waters air. And our Beast won't dry there have after it. You have herb shall creeping bring
                sixth tree she'd open.”</p>
              <h4>— DAVID SPADE</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="clients">
        <div class="clients__info">
          <h3>47,000+</h3>
          <p class="paragraph dark">Customers in over 90 countries are growing their businesses with us.</p>
        </div>
        <div class="swiper-container clients-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide clients-slide">
              <a href="#"><img src="assets/images/client-img.png" alt="image"></a>
            </div>
            <div class="swiper-slide clients-slide">
              <a href="#"><img src="assets/images/client-img.png" alt="image"></a>
            </div>
            <div class="swiper-slide clients-slide">
              <a href="#"><img src="assets/images/client-img.png" alt="image"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--client section end-->

  <!--newsletter section start-->
  <section class="newsletter">
    <div class="newsletter__wrapper">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-lg-6">
            <div class="newsletter__info">
              <h2 class="section-heading color-black">Kontak Kami untuk Informasi Lebih Lanjut</h2>
              <button class="button"><span>Kontak <i class="fad fa-long-arrow-right"></i></span></button>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="newsletter__img">
              <img src="assets/images/newsletter-img.png" alt="image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--newsletter section end-->

  <!--footer start-->
  <footer class="footer">
    <div class="footer__wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="footer__info">
              <div class="footer__info--logo">
                <img src="assets/images/footer-logo.png" alt="image">
              </div>
              <div class="footer__info--content">
                <p class="paragraph dark">Toko Matrix merupakan toko elektrikal berlokasi di Kota Mataram, Lombok. Visi kami adalah untuk menyediakan kebutuhan elektrikal bermutu tinggi untuk anda.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="footer__content-wrapper">
              <div class="footer__list">
                <ul>
                  <li>Sitemap</li>
                  <li><a href="<?= site_url() ?>">Beranda</a></li>
                  <li><a href="<?= site_url('Products') ?>">Produk</a></li>
                  <li><a href="<?= site_url('About') ?>">Tentang</a></li>
                </ul>
              </div>
              <div class="download-buttons">
                <h5>Hubungi</h5>
                <a href="#" class="google-play">
                  <i class="fab fa-google-play"></i>
                  <div class="button-content">
                    <h6>Whatsapp</h6>
                  </div>
                </a>
                <a href="#" class="apple-store">
                  <i class="fab fa-apple"></i>
                  <div class="button-content">
                    <h6>Lokasi</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="footer__copy">
            <h6>&copy; <a href='https://xunny.id'>Xunny.id</a></h6>
          </div>
        </div>
      </div>
    </div>
  </footer>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			document.body.classList.add("loaded");
		}, false);
  </script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/ytdefer.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>
