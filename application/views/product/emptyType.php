<section class='hero'>
	<div class='hero__wrapper'>
		<div class='container'>
			<div class='row'>
				<div class='col-12 text-center'>
					<img 
						src='<?= base_url('assets/images/NotFound.png') ?>' 
						alt='Not found illustration' 
						title="Not found illustration" 
						class='w-100'
						style='max-width:400px'>
					<h1 class='d-none'>Mohon maaf,</h1>
					<p class='paragraph w-100 text-center'>Mohon maaf, kami tidak dapat menemukan tipe yang anda cari.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class='growth mt-5'>
	<div class='container'>
		<div class='row'>
			<div class='col-12'>
				<h2 class='section-heading mb-2'>Merek lain yang mungkin anda cari</h2>
				<p class='paragraph w-100 text-center'>Pilihan merek-merek barang yang kami sediakan.</p>
			</div>
			<hr>

			<?php foreach($brands as $brand){ ?>
				<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-3'>
					<div class='card w-100'>
						<img class="card-img-top" src="<?= base_url('assets/images/brands/') . $brand->id ?>.png" alt="<?= $brand->name ?>">
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
</section>
