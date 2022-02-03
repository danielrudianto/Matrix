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

	<!-- Scripting -->
	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/ytdefer.min.js') ?>"></script>
	<script src="<?= base_url("assets/js/script.js") ?>"></script>

	<title>Toko Matrix | Product | <?= $product->name ?> <?= $product->brandName ?></title>
	<meta name='description' content='<?= $product->description ?>'>
	<link rel='canonical' href='<?= current_url(); ?>'>
	<meta name='author' content='Xunny.id'>
	<meta name='publisher' content='Xunny.id'>

	<style>
		.loader {
			border: 16px solid #f3f3f3;
			border-top: 16px solid #3498db;
			border-radius: 50%;
			width: 120px;
			height: 120px;
			animation: spin 2s linear infinite;
			margin-left:50%;
			margin-right:50%;
			position:relative;
		}

		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
	</style>
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
	<main>
		<section class='hero'>
			<div class='hero__wrapper' style='background-color:white'>
				<div class='container'>
					<div class='row'>
						<div class='col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12 text-center'>
							<img 
								src='<?= base_url('assets/images/products/') . $product->id . '.png' ?>' 
								alt='<?= $product->name ?> image' 
								title="<?= $product->name ?> image" 
								class='w-100'>
						</div>
						<div class='col-xl-9 col-lg-8 col-md-6 col-sm-10 col-12'>
							<h1 style='font-size:4rem;font-weight:bold' class='text-md-start text-center'><?= $product->name ?></h1>
							<p class='paragraph my-0'><strong><?= $product->alias ?></strong></p>
							<p class='paragraph mt-0' >
								<a class='text-dark decoration-none' href='<?= site_url('Products/Brand/') . rawurlencode($product->brandName) ?>'><strong><?= $product->brandName ?></strong></a> / <a  class='text-dark decoration-none' href='<?= site_url('Products/Type/') . rawurlencode($product->typeName) ?>'><?= $product->typeName ?></a></p>
							<p class='paragraph'><?= $product->description ?></p>
							<a 
								class='button'
								href='<?= site_url("Products") ?>'>Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class='growth'>
			<div class='container'>
				<div class='row'>
					<?php foreach($otherProducts as $otherProduct){ ?>
						<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mt-0'>
							<div class='card w-100 mb-3'>
								<img 
									class="card-img-top w-100" 
									src="<?= base_url('assets/images/products/') . $otherProduct->id ?>.png" 
									alt="<?= $otherProduct->name ?>" 
									title='<?= $otherProduct->name ?> image'>
								<div class="card-body p-5 text-center">
									<h2 class="h3 card-title"><?= $otherProduct->name ?></h3>
									<p class='h4 card-subtitle mb-0'><?= $otherProduct->alias ?></p>
									<p class='paragraph mb-5'><?= $otherProduct-> brandName ?></p>
									<p class='paragraph'><?= $otherProduct->description ?></p>
									<br>
									<a 
										href="<?= site_url('Products/Item/') . rawurlencode($otherProduct->name) ?>" 
										class="btn btn-outline-dark btn-lg btn-block px-5 py-1">
											<h3 class='mb-0'>Pelajari</h3>
									</a>
								</div>
							</div>
						</div>
					<?php }  ?>
				</div>
			</div>
		</section>
	</main>
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
</body>
