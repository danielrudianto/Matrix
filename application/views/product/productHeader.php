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

	<title>Toko Matrix | Merek | <?= $title ?></title>
	<meta name='description' content='<?= $description ?>'>
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
