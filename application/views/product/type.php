<section class='hero'>
	<div class='hero__wrapper'>
		<div class='container'>
			<div class='row justify-content-center'>
				<div class='col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12 text-center'>
					<img 
						src='<?= base_url('assets/images/brands/') . $brand->id . '.png' ?>' 
						alt='Not found illustration' 
						title="Not found illustration" 
						class='w-100'>
				</div>
				<div class='col-xl-9 col-lg-8 col-md-6 col-sm-10 col-12'>
					<h1><?= $brand->name ?></h1>
					<p class='paragraph'><?= $brand->description ?></p>
					<a 
						class='button'
						href='<?= site_url("Products") ?>'>Kembali</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class='container mt-5'>
		<div class='row' id='products'>
			<?php foreach($items as $item){ ?>
				<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch'>
					<div class='card w-100 mb-3'>
						<img 
							class="card-img-top w-100" 
							src="<?= base_url('assets/images/products/') . $item->id ?>.png" 
							alt="<?= $item->name ?>" 
							title='<?= $item->name ?> image'>
						<div class="card-body p-5 text-center">
							<h2 class="h3 card-title"><?= $item->name ?></h3>
							<p class='h4 card-subtitle mb-5'><?= $item->alias ?></p>
							<p class='paragraph'><?= $item->description ?></p>
							<br>
							<a 
								href="<?= site_url('Products/Detail/') . rawurlencode($item->name) ?>" 
								class="btn btn-outline-dark btn-lg btn-block px-5 py-1">
									<h3 class='mb-0'>Telusuri</h3>
							</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class='row text-center' id='loader'>
			<div class='loader'></div>
		</div>
		<div class='row mt-5'>
			<div class='col-12 text-end'>
				<nav aria-label="Pagination">
					<ul class="pagination pagination-lg">
						<?php for($i = 1; $i <= $pages; $i++){ ?>
						<li 
							id='page-item-<?= $i ?>'
							class="page-item" 
							style='cursor:pointer'>
							<a
								style='font-size:1.8rem'
								class="page-link"><?= $i ?></a>
						</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>
<script>
	var selectedPage = 1;
	$(document).ready(function(){
		// Set first page as active
		$('#page-item-' + selectedPage).addClass("active");
		$('#page-item-' + selectedPage).addClass("disabled");

		// Set the hidden
		$("#loader").hide();
		$('.page-item').on('click', function(e){
			getProducts(e.currentTarget.id.substr(10,265));
		})
	})

	function getProducts(page){
		// Get product with pagination data and brand id data
		$.ajax({
			url:'<?= site_url('Products/GetItemsByBrand') ?>',
			data:{
				page: page,
				brand: <?= $brand->id ?>
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

				$.each(response, function(index, item){
					$('#products').append(`<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch'>
					<div class='card w-100 mb-3'>
						<img 
							class="card-img-top w-100" 
							src="<?= base_url('assets/images/products/') ?>${item.id}.png" 
							alt="${item.name}" 
							title='${item.name} image'>
						<div class="card-body p-5 text-center">
							<h2 class="h3 card-title">${item.name}</h3>
							<p class='h4 card-subtitle mb-5'>${item.alias}</p>
							<p class='paragraph'>${item.description}</p>
							<br>
							<a 
								href="<?= site_url('Products/Detail/') ?>${encodeURIComponent(item.name)}" 
								class="btn btn-outline-dark btn-lg btn-block px-5 py-1">
									<h3 class='mb-0'>Telusuri</h3>
							</a>
						</div>
					</div>
				</div>`)
				})
			},
			complete:function(){
				$('#loader').hide();
				$('#products').fadeIn(150);
			}
		})
	}
</script>
