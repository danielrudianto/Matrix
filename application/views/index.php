<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<meta charset="utf-8">

	<!-- Icons -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-touch-icon.png') ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png') ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png') ?>">
	<link rel="manifest" href="<?= base_url('assets/favicon/site.webmanifest') ?>">

	<!-- Styling  -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

	<title>Toko Matrix | Electrical Mega Store</title>
</head>
<div class="preloader">
  <img src="<?= base_url('assets/images/loading-logo.png') ?>" alt="Logo Toko Matrix" title='Logo Toko Matrix'>
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
            <li 
              id="menu-1">
              <a 
                href="<?= site_url() ?>" 
                class="dropdown-info">
                Home</a>
            </li>
            <li><a href="#video">About</a></li>
						<li><a href="#Products">Products</a></li>
						<li><a href="#Contact">Contact</a></li>
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
              <img src="<?= base_url('assets/images/hero.png') ?>" alt="Hero Image Toko Matrix" title='Hero Image Toko Matrix'>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--hero section end-->

  <!--feature section start-->
  <section class="feature" id="Products">
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
                <img src="<?= base_url('assets/images/phone-01.png') ?>" alt="Ilustrasi langkah cari produk" title='Ilustrasi langkah mencari produk'>
              </div>
              <div class="content">
                <h3><span class='h3 text-uppercase'>Cari </span><span>Produk Elektrikal yang Dibutuhkan</span></h3>
                <p class="paragraph dark">Gunakan aplikasi produk katalog kami untuk mencari kebutuhan elektrikal anda <a href='<?= site_url('Products') ?>'>disini.</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="step__box">
              <div class="image">
                <img src="<?= base_url("assets/images/phone-02.png") ?>" alt="image">
              </div>
              <div class="content">
                <h3><span class='h3 text-uppercase'>Kontak </span><span>kami untuk rincian dan spesifikasi</span></h3>
                <p class="paragraph dark">Jangan ragu untuk kontak kami apabila ada pertanyaan menyangkut produk yang anda butuhkan <a href='#Contact'>disini.</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="step__box">
              <div class="image">
                <img src="<?= base_url('assets/images/phone-03.png') ?>" alt="image">
              </div>
              <div class="content">
              <h3><span class='h3 text-uppercase'>Datang </span><span>dan Ambil Barang Pesanan</span></h3>
                <p class="paragraph dark">Bayar dan Ambil pesananan anda, ya semudah itu berbelanja di Toko Matrix.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="button__wrapper">
            <a href="#Contact" class="button">
              <span>Kontak Kami Sekarang</span>
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
      <div class='row'>
        <div class='col-12'>
          <h2 class="section-heading color-black">Terpercaya dan Terlengkap</h2>
          <p class='h2 text-center lh-lg'>Toko Matrix telah dipercaya lebih dari 10 tahun dan telah melayani lebih dari 1.000 pengguna selama berkarier. Berkomitmen untuk menyediakan hanya dan hanya produk dan pelayanan terbaik untuk anda, kami terus mengembangkan sistem pelayanan serta kelengkapan produk kami.</p>
          <br>

          <p class='h2 text-center'>Telusuri produk kami saat ini di <a href='<?= site_url('Products') ?>'>Product Catalogue</a> kami.</p>
          <br><br><br>
          <div class='text-center'>
            <button class='button'>Download Flyer</button>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!--client section end-->

  <!--newsletter section start-->
  <section class="newsletter" id='Contact'>
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
              <img src="<?= base_url('assets/images/newsletter-img.png') ?>" alt="Ilustrasi kontak kami" title='Kontak kami Toko Matrix'>
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
                <img src="<?= base_url('assets/images/footer-logo.png') ?>" alt="Logo Toko Matrix" title='Logo Toko Matrix'>
              </div>
              <div class="footer__info--content">
                <p class="paragraph dark">Toko Matrix merupakan toko elektrikal berlokasi di Kota Mataram, Lombok. Visi kami adalah untuk menyediakan kebutuhan elektrikal bermutu tinggi untuk anda.</p>
                <p class="paragraph dark">Suka dengan apa yang anda lihat? Kontak kami untuk <a href='https://xunny.id' rel='dofollow'>membuat website</a> serupa.</p>
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
                <a href="https://goo.gl/maps/YyDtPUNPhwhp6VB99" target='blank' class="apple-store">
                  <i class="fab fa-apple"></i>
                  <div class="button-content">
                    <h6>Lokasi</h6>
                  </div>
                </a>
              </div>
            </div>
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
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/ytdefer.min.js') ?>"></script>
  <script src="<?= base_url("assets/js/script.js") ?>"></script>
</body>

</html>
