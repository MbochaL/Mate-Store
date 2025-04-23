<!-- 🔹 Carrusel de imágenes -->
<section class="container-max-widths">
  <div id="carouselExampleAutoplaying" class="carousel slide w-100 mx-auto overflow-hidden" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('/assets/img/carousel1.jpg') ?>" class="d-block w-100 h-100 object-fit-cover" alt="image mate 1">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('/assets/img/carousel2.jpg') ?>" class="d-block w-100 h-100 object-fit-cover" alt="image mate 2">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('/assets/img/carousel3.jpg') ?>" class="d-block w-100 h-100 object-fit-cover" alt="image mate 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- 🔹 Presentación de la empresa -->
<section class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold">Bienvenidos a <span class="text-success">Mateando</span></h2>
    <p class="fs-5 text-muted">Somos una tienda especializada en productos para el mate. Ofrecemos artículos de alta calidad para que disfrutes de esta tradición argentina como se debe.</p>
  </div>
  <div class="row text-center">
    <!-- Producto Mate -->
    <div class="col-md-4 mb-4">
      <div class="card border-0 shadow-sm h-100 product-card">
        <div class="card-body">
          <img src="<?php echo base_url('/assets/img/mate-imperial.jpg') ?>" alt="Mate" class="img-fluid mb-3 rounded" style="max-width: 200px; max-height: 200px; object-fit: cover;">
          <h5 class="fw-semibold">Mate Imperial</h5>
          <p class="text-muted">Mates artesanales y modernos en calabaza, madera y acero. Diseños únicos para cada estilo.</p>
          <p class="text-dark fw-bold">$1,500 ARS</p>
        </div>
      </div>
    </div>
    <!-- Producto Bombilla -->
    <div class="col-md-4 mb-4">
      <div class="card border-0 shadow-sm h-100 product-card">
        <div class="card-body">
          <img src="<?php echo base_url('/assets/img/bombilla-mate-silver.jpg') ?>" alt="Bombilla" class="img-fluid mb-3 rounded" style="max-width: 200px; max-height: 200px; object-fit: cover;">
          <h5 class="fw-semibold">Bombilla Mate Silver</h5>
          <p class="text-muted">Bombillas de acero inoxidable con filtro de alta calidad. Elegancia y funcionalidad en cada sorbo.</p>
          <p class="text-dark fw-bold">$800 ARS</p>
        </div>
      </div>
    </div>
    <!-- Producto Termo -->
    <div class="col-md-4 mb-4">
      <div class="card border-0 shadow-sm h-100 product-card">
        <div class="card-body">
          <img src="<?php echo base_url('/assets/img/termo.jpg') ?>" alt="Termo" class="img-fluid mb-3 rounded" style="max-width: 200px; max-height: 200px; object-fit: cover;">
          <h5 class="fw-semibold">Termo de 1L</h5>
          <p class="text-muted">Termos térmicos que conservan la temperatura por horas. Ideales para la rutina diaria o tus aventuras.</p>
          <p class="text-dark fw-bold">$2,000 ARS</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS extra para tarjetas -->
<style>
  .product-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
  }
</style>