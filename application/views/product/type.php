<section class='hero'>
	<div class='hero__wrapper'>
		<div class='container'>
			<div class='row justify-content-center'>
				<div class='col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12 text-center'>
					<img 
						src='<?= base_url('assets/images/brands/') . $brand->id . '.png' ?>' 
						alt='<?= $brand->name ?> image' 
						title="<?= $brand->name ?> image" 
						class='w-100'>
				</div>
				<div class='col-xl-9 col-lg-8 col-md-6 col-sm-10 col-12'>
					<h1 style='font-size:4rem;font-weight:bold' class='text-center text-md-start'><?= $brand->name ?></h1>
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
		<div class='row'>
			<div class='col-12'>
				<form method='get' action='<?= site_url('Products/Search') ?>'>
					<div class='input-group input-group-lg mb-5'>
						<input
							type='hidden'
							value='<?= $brand->name ?>'
							name='brand'
							id='brand'>
						<input 
							name='keyword'
							id='keyword'
							type='text' 
							class='form-control' 
							style='font-size:1.6rem'
							placeholder="Cari produk <?= $brand->name ?>">
						<button 
							class="btn btn-outline-secondary px-5" 
							required
							type="submit"
							style='font-size:1.6rem'>Cari</button>
					</div>
				</form>
			</div>
		</div>
		<div class='row' id='products'>
			<?php foreach($items as $item){ ?>
				<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch'>
					<div class='card w-100 mb-3'>
						<img 
							class="card-img-top w-100" 
							src="<?= base_url('assets/images/products/') . $item->id ?>.webp" 
							alt="<?= $item->name ?>" 
							title='<?= $item->name ?> image'>
						<div class="card-body p-5 text-center">
							<h2 class="h3 card-title"><?= $item->name ?></h3>
							<p class='h4 card-subtitle mb-5'><?= $item->alias ?></p>
							<p class='paragraph'><?= $item->description ?></p>
							<br>
							<a 
								href="<?= site_url('Products/Item/') . rawurlencode($item->name) ?>" 
								class="btn btn-outline-dark btn-lg btn-block px-5 py-1">
									<h3 class='mb-0'>Pelajari</h3>
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
						<?php if($pages > 1){ for($i = 1; $i <= min($pages, 4); $i++){ ?>
						<li 
							id='page-item-<?= $i ?>'
							class="page-item" 
							style='cursor:pointer'>
							<a
								style='font-size:1.8rem'
								class="page-link"><?= $i ?></a>
						</li>
						<?php }} ?>
						<?php if($pages > 4){ ?>
							<li>
								<span 
									style='font-size:1.8rem'
									class='page-link'>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
										<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
									</svg>
								</span>
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
			getProducts(parseInt(e.currentTarget.id.substr(10,265)));
		})

		if(<?= !empty($_GET['page']) ? $_GET['page'] : 0 ?> != 0){
			page		= parseInt(<?= !empty($_GET['page']) ? $_GET['page'] : 0 ?>);
			if(page == 0){
				window.history.replaceState(null, null, null);
			} else {
				getProducts(page);
			}
		}
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

				$('.pagination').empty();
			},
			complete:function(){
				$('#loader').hide();
				$('#products').fadeIn(150);
				$(window).scrollTop($('.hero').innerHeight);

				// If page is more than the initial value
				// But far away from the end
				if(page >= 4 && <?= $pages ?> > (page + 3)){
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
					for(i = 1; i <= <?= min(4, $pages) ?>; i++){
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

					if(<?= $pages ?> > 4){
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

					for(i = (<?= $pages ?> - 4); i <= <?= $pages ?>; i++){
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

				$('.page-item').on('click', function(e){
					getProducts(parseInt(e.currentTarget.id.substr(10,265)));
				})

				$('#page-item-' + selectedPage).addClass("active");
				$('#page-item-' + selectedPage).addClass("disabled");
				window.history.replaceState(null, null, "?page=" + page);
			}
		})
	}
</script>
