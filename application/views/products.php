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

	<title>Toko Matrix | Produk</title>
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
                <div class="header__nav">
                    <ul class="header__nav-primary">
                        <li class='h2'>Product Selector</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
	<section class='hero'>
		<div class='hero__wrapper'>
			<div class="container">     
          <div class='row justify-content-center'>
              <div class='col-12 text-center'>
              <h2 class="section-heading color-black w-100">Selamat datang di <br><i>Online Catalogue</i> Toko Matrix</h2>
                  <p class='paragraph'>Pada aplikasi ini, kami dapat membantu anda untuk memilih produk sesuai kebutuhan anda. Untuk memudahkan anda untuk memiliih produk, kami telah mengklasifikasikan produk - produk andalan kami ke dalam beberapa <em>filter</em> yaitu <strong>merek</strong>, dan <strong>jenis barang</strong>.</p>
              </div>
              <div class='col-lg-4 col-md-6 col-sm-8 col-12 mt-5'>
                  <div class="input-group mb-3">
                      <input 
                          type="text" 
                          class="form-control p-3" 
                          placeholder="Cari Produk" 
                          aria-label="Cari Produk" 
                          aria-describedby="button-addon2"
                          style='font-size:1.6rem'>
                  <button 
                      class="btn btn-outline-secondary px-5" 
                      type="button" 
                      id="button-addon2"
                      style='font-size:1.6rem'>Cari</button>
                  </div>
              </div>
          </div>
      </div>
		</div>
	</section>
	<section class='growth mt-5'>
		<div class='container'>
			<div class='row'>
				<div class='col-12'>
					<h2 class='section-heading mb-2'>Merek</h2>
					<p class='paragraph w-100 text-center'>Pilihan merek-merek barang yang kami sediakan.</p>
				</div>
				<hr>

				<?php foreach($brands as $brand){ ?>
					<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-3'>
						<div class='card w-100'>
							<img 
                class="card-img-top" 
                src="<?= base_url('assets/images/brands/') . $brand->id ?>.png" 
                alt="<?= $brand->name ?>"
                title='<?= $brand->name ?> brand image'>
							<div class="card-body p-5 text-center">
								<h3 class="h2 card-title"><?= $brand->name ?></h3>
								<br>
								<a href="<?= site_url('Products/Brand/') . rawurlencode($brand->name) ?>" class="btn btn-outline-dark btn-lg btn-block px-5 py-1"><h3 class='mb-0'>Telusuri</h3></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class='container mt-5'>
			<div class='row'>
				<div class='col-12'>
					<h2 class='section-heading mb-2'>Jenis</h2>
					<p class='paragraph w-100 text-center'>Pilihan jenis barang yang kami sediakan.</p>
				</div>
				<hr>

				<?php foreach($types as $type){ ?>
					<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-3'>
						<div class='card w-100'>
							<img class="card-img-top" src="<?= base_url('assets/images/types/') . $type->id ?>.png" alt="<?= $type->name ?>">
							<div class="card-body p-5 text-center">
								<h3 class="h2 card-title"><?= $type->name ?></h3>
								<br>
								<a href="#" class="btn btn-outline-dark btn-lg btn-block px-5 py-1"><h3 class='mb-0'>Telusuri</h3></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
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
        <div class="row">
          <div class="footer__copy">
            <h6>&copy; <a href='https://xunny.id' rel='dofollow' target='_blank'>Xunny.id</a></h6>
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
