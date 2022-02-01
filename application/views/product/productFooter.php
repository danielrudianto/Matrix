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
