<section class="welcome-section">
  <div class="container">

    <div class="welcome-header text-center">
      <h2 class="welcome-title">Bienvenidos a <span>Mate Store</span></h2>
      <p class="welcome-description">Somos una tienda especializada en productos para el mate. Ofrecemos artículos de alta calidad seleccionados cuidadosamente para que disfrutes de esta tradición argentina como se merece.</p>
    </div>

    <div class="row g-4 justify-content-md-center">
      <!-- Producto Mate -->
      <div class="col-lg-4 col-md-6">
        <div class="featured-product">
          <div class="product-image-container">
            <span class="product-tag">Destacado</span>
            <img src="<?php echo base_url('/assets/img/mate-imperial.jpg') ?>" alt="Mate Imperial" class="product-image">
          </div>
          <div class="product-content">
            <h3 class="product-title">Mate Imperial Premium</h3>
            <p class="product-description">Mate artesanal de calabaza forrado en cuero con detalles en alpaca. Diseño tradicional argentino de la más alta calidad.</p>

            <div class="product-meta">
              <div class="product-price-container">
                <span class="product-price">$35.000</span>
              </div>
            </div>

            <div class="product-actions mt-3">
              <a href="<?php echo base_url('inicio'); ?>" class="product-btn">
                Comprar ahora <i class="bi bi-arrow-right btn-icon"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Bombilla -->
      <div class="col-lg-4 col-md-6">
        <div class="featured-product">
          <div class="product-image-container">
            <span class="product-tag">Premium</span>
            <img src="<?php echo base_url('/assets/img/bombilla-mate-silver.jpg') ?>" alt="Bombilla Mate Silver" class="product-image">
          </div>
          <div class="product-content">
            <h3 class="product-title">Bombilla Mate Silver</h3>
            <p class="product-description">Bombilla de alpaca con filtro desmontable. Diseño elegante con acabado plateado que no altera el sabor de tu mate.</p>

            <div class="product-meta">
              <div class="product-price-container">
                <span class="product-price">$9.000</span>
              </div>
            </div>

            <div class="product-actions mt-3">
              <a href="<?php echo base_url('inicio'); ?>" class="product-btn">
                Comprar ahora <i class="bi bi-arrow-right btn-icon"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Producto Termo -->
      <div class="col-lg-4 col-md-6">
        <div class="featured-product">
          <div class="product-image-container">
            <span class="product-tag">Calidad</span>
            <img src="<?php echo base_url('/assets/img/termo.jpg') ?>" alt="Termo de 1L" class="product-image">
          </div>
          <div class="product-content">
            <h3 class="product-title">Termo Stanley 1L</h3>
            <p class="product-description">Termo de acero inoxidable que mantiene la temperatura por hasta 24 horas. Ideal para tus mates en cualquier momento y lugar.</p>

            <div class="product-meta">
              <div class="product-price-container">
                <span class="product-price">$30.000</span>
              </div>
            </div>

            <div class="product-actions mt-3">
              <a href="<?php echo base_url('inicio'); ?>" class="product-btn">
                Comprar ahora <i class="bi bi-arrow-right btn-icon"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="view-all-container">
      <a href="<?php echo base_url('inicio'); ?>" class="view-all-btn">
        Ver todos los productos <i class="bi bi-grid view-all-icon"></i>
      </a>
    </div>
  </div>
</section>