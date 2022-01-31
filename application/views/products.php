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
                <div class="header__nav">
                    <ul class="header__nav-primary">
                        <li class='h2'>Product Selector</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section class="growth my-5" id="feature">
        <div class="growth__wrapper">
            <div class="container">
                <h2 class="section-heading color-black">Selamat datang di <br><i>Online Catalogue</i> Toko Matrix</h2>
                <div class='row justify-content-center'>
                    <div class='col-12 text-center'>
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
    <div class='container'>
        <div class='row'>
            <div class='col-12'>
                <h2 class='section-heading'>Merek</h2>
                <p class='paragraph'>Pilihan merek-merek barang yang kami sediakan.</p>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class='row'>
            <div class='col-12'>
                <h2 class='section-heading'>Jenis</h2>
                <p class='paragraph'>Pilihan jenis barang yang kami sediakan.</p>
            </div>
        </div>
    </div>
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