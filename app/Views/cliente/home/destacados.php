<section class="welcome-section">
  <div class="container">

    <div class="welcome-header text-center">
      <h2 class="welcome-title">Bienvenidos a <span>Mate Store</span></h2>
      <p class="welcome-description">Somos una tienda especializada en productos para el mate. Ofrecemos artículos de alta calidad seleccionados cuidadosamente para que disfrutes de esta tradición argentina como se merece.</p>
    </div>

    <div class="row g-4 justify-content-md-center">
      <?php foreach ($destacados as $item): ?>
        <div class="col-lg-4 col-md-6">
          <div class="featured-product">
            <div class="product-image-container">
              <span class="product-tag"><?= esc($item['categoria']) ?></span>
              <img src="<?= base_url('assets/uploads/' . $item['producto']['img_producto']) ?>"
                alt="<?= esc($item['producto']['nombre_producto']) ?>" class="product-image">
            </div>
            <div class="product-content">
              <h3 class="product-title"><?= esc($item['producto']['nombre_producto']) ?></h3>
              <p class="product-description"><?= esc($item['producto']['descripcion_producto']) ?></p>

              <div class="product-meta">
                <div class="product-price-container">
                  <span class="product-price">$<?= number_format($item['producto']['precio_producto'], 2, ',', '.') ?></span>
                </div>
              </div>

              <div class="product-actions mt-3">
                <a href="<?= base_url('productos/ver/' . $item['producto']['id_producto']) ?>" class="product-btn">
                  Comprar ahora <i class="bi bi-arrow-right btn-icon"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="view-all-container">
      <a href="<?= base_url('catalogo'); ?>" class="view-all-btn">
        Ver todos los productos <i class="bi bi-grid view-all-icon"></i>
      </a>
    </div>
  </div>
</section>