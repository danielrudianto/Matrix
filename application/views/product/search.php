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

	<title>Toko Matrix | Search product</title>
	<meta name='description' content='Alat pencarian produk elektrikal, disediakan oleh Toko Matrix, Kota Mataram, Lombok'>
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

        label{
            font-size:1.8rem;
            margin-top:1rem;
        }
	</style>
</head>
<!-- <div class="preloader">
  <img src="<?= base_url('assets/images/loading-logo.png') ?>" alt="Logo Toko Matrix" title='Logo Toko Matrix'>
</div> -->
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
                        <form class='mb-5' method='get' action='<?= site_url('Products/Search') ?>'>
                            <label for='keyword'>Kata kunci</label>
                            <input 
                                required
                                name='keyword'
                                id='keyword'
                                type='text' 
                                class='form-control' 
                                style='font-size:1.6rem'
                                placeholder="Cari produk"
                                value='<?= rawurldecode($keyword) ?>'>

                            <label for='brand'>Merek</label>
                            <select
                                required
                                name='brand'
                                id='brand'
                                class='form-control'
                                style='font-size:1.6rem'>
								<option value='All'>Semua Merek</option>
                                <?php foreach($brands as $brand){ ?>
                                <option 
                                    value='<?= rawurlencode($brand->name) ?>'
                                    <?= ($brand->id == $selectedBrand->id) ? "selected" : "" ?>>
                                    <?= $brand->name ?>
                                </option>
                                <?php } ?>
                            </select>
                            <br>
                            <button 
                                class="btn btn-outline-secondary px-5" 
                                required
                                type="submit"
                                style='font-size:1.6rem'>Cari</button>
                        </form>
					</div>
					<div class='row' id='products'></div>
					<div class='row' id='notfound' style='display:none'>
						<div class='col-12 text-center'>
							<img src='<?= base_url('assets/images/NotFound.png') ?>' class='w-100' style='max-width:400px'>
							<p class='paragraph'>Mohon maaf, barang dengan kata kunci yang anda cari tidak kami temukan. Coba ganti kata kunci atau ganti merek yang anda cari.</p>
						</div>
					</div>
					<div class='row'>
						<div class='col-12'>
							<ul class="pagination pagination-lg"></ul>
						</div>
					</div>
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
		var selectedPage = 1;
		document.addEventListener('DOMContentLoaded', function() {
			document.body.classList.add("loaded");
		}, false);

		$(document).ready(function(){
			getProducts(1);
		})

		function getProducts(page){
		// Get product with pagination data and brand id data
		$.ajax({
			url:'<?= site_url('Products/searchByKeywordBrand') ?>',
			data:{
				page: page,
				brand: $('#brand').val(),
				keyword: $('#keyword').val()
			},
			type:"GET",
			beforeSend:function(){
				// Remove every class on pagination item
				// When sending request to server
				$('.page-item').removeClass("active");
				$('.page-item').removeClass("disabled");

				// Hide the product row and show the loader
				$('#products').fadeOut(150);
				$("#loader").show(150);
			},
			success:function(response){
				// The response should be in JSON format
				selectedPage = page;
				$('#page-item-' + selectedPage).addClass("active");
				$('#page-item-' + selectedPage).addClass("disabled");

				$('#products').empty();

				if(response.products.length == 0){
					$('#notfound').show();
				} else {
					$('#notfound').hide();
					$.each(response.products, function(index, item){
						$('#products').append(`<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch'>
						<div class='card w-100 mb-3'>
							<img 
								class="card-img-top w-100" 
								src="<?= base_url('assets/images/products/') ?>${item.id}.webp" 
								alt="${item.name}" 
								title='${item.name} image'>
							<div class="card-body p-5 text-center">
								<h2 class="h3 card-title">${item.name}</h3>
								<p class='h4 card-subtitle mb-5'>${item.alias}</p>
								<p class='paragraph'>${item.description}</p>
								<br>
								<a 
									href="<?= site_url('Products/Item/') ?>${encodeURIComponent(item.name)}" 
									class="btn btn-outline-dark btn-lg btn-block px-5 py-1">
										<h3 class='mb-0'>Telusuri</h3>
								</a>
							</div>
						</div>
					</div>`)
					})
				}

				$('.pagination').empty();
			},
			complete:function(){
				$('#loader').hide();
				$('#products').fadeIn(150);
				$(window).scrollTop($('.hero').innerHeight);

				// If page is more than the initial value
				// But far away from the end
				if(<?= $search['pages'] ?> > 1){
					if(page >= 4 && <?= $search['pages'] ?> > (page + 3)){
						$('.pagination').append(`
							<li>
								<span 
									style='font-size:1.8rem'
									class='page-link'>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
										<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
									</svg>
								</span>
							</li>`
						);

						for(i = page - 2; i <= page + 2; i++){
							$('.pagination').append(
								`<li 
									id='page-item-${i}'
									class="page-item" 
									style='cursor:pointer'>
									<a
										style='font-size:1.8rem'
										class="page-link">${i}</a>
								</li>`
							);
						}

						$('.pagination').append(`
							<li>
								<span 
									style='font-size:1.8rem'
									class='page-link'>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
										<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
									</svg>
								</span>
							</li>`
						);
					} else if(page < 4){
						for(i = 1; i <= <?= min(4, $search['pages']) ?>; i++){
							$('.pagination').append(
								`<li 
									id='page-item-${i}'
									class="page-item" 
									style='cursor:pointer'>
									<a
										style='font-size:1.8rem'
										class="page-link">${i}</a>
								</li>`
							);
						}

						if(<?= $search['pages'] ?> > 4){
							$('.pagination').append(`
								<li>
									<span 
										style='font-size:1.8rem'
										class='page-link'>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
											<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
										</svg>
									</span>
								</li>`
							);
						}
					} else {
						$('.pagination').append(`
							<li>
								<span 
									style='font-size:1.8rem'
									class='page-link'>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
										<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
									</svg>
								</span>
							</li>`
						);

						for(i = (<?= $search['pages'] ?> - 4); i <= <?= $search['pages'] ?>; i++){
							$('.pagination').append(
								`<li 
									id='page-item-${i}'
									class="page-item" 
									style='cursor:pointer'>
									<a
										style='font-size:1.8rem'
										class="page-link">${i}</a>
								</li>`
							);
						}
					}
				}

				$('.page-item').on('click', function(e){
					getProducts(parseInt(e.currentTarget.id.substr(10,265)));
				})

				$('#page-item-' + selectedPage).addClass("active");
				$('#page-item-' + selectedPage).addClass("disabled");
			}
		})
	}
	</script>
</body>
