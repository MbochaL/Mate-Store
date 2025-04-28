<style>
  /* Estilos para el carrusel */
  .hero-carousel {
    margin-bottom: 2rem;
    position: relative;
  }

  .carousel-container {
    max-width: 100%;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  }

  .carousel-item {
    height: 500px;
    /* Altura estándar para el carrusel */
  }
  
  .carousel-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
  }

  /* Mejora los controles del carrusel */
  .carousel-control-prev,
  .carousel-control-next {
    width: 10%;
    opacity: 0;
    transition: all 0.3s ease;
  }

  .carousel-container:hover .carousel-control-prev,
  .carousel-container:hover .carousel-control-next {
    opacity: 0.8;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: rgba(89, 34, 14, 0.7);
    border-radius: 50%;
    width: 40px;
    height: 40px;
    background-size: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* Estilo para los indicadores */
  .carousel-indicators {
    margin-bottom: 1rem;
  }

  .carousel-indicators [data-bs-target] {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: rgba(242, 239, 187, 0.7);
    border: 2px solid rgba(89, 34, 14, 0.5);
    margin: 0 5px;
  }

  .carousel-indicators .active {
    background-color: #59220e;
  }

  /* Overlay para textos en el carrusel */
  .carousel-caption {
    background-color: rgba(89, 34, 14, 0.7);
    border-left: 5px solid #f2efbb;
    padding: 1.5rem;
    max-width: 500px;
    text-align: left;
    bottom: 2rem;
    left: 2rem;
    right: auto;
  }
  
  .carousel-caption h2 {
    font-weight: 700;
    margin-bottom: 0.5rem;
    font-size: 1.8rem;
  }

  .carousel-caption p {
    font-size: 1rem;
    margin-bottom: 1rem;
  }

  .carousel-btn {
    background-color: #f2efbb;
    color: #59220e;
    border: none;
    padding: 0.5rem 1.25rem;
    font-weight: 600;
    border-radius: 4px;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
  }
  .carousel-btn:hover {
    background-color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    color: #59220e;
  }

  /* Responsive para pantallas pequeñas */
  @media (max-width: 767.98px) {
    .carousel-item {
      height: 350px;
      /* Altura reducida para móviles */
    }
    
    .carousel-caption {
      max-width: 80%;
      padding: 1rem;
      bottom: 1rem;
      left: 1rem;
    }

    .carousel-caption h2 {
      font-size: 1.4rem;
    }

    .carousel-caption p {
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
    }
  }
  
  /* Responsive para pantallas muy pequeñas */
  @media (max-width: 575.98px) {
    .carousel-item {
      height: 250px; /* Altura aún más reducida para móviles pequeños */
    }
    
    .carousel-caption {
      max-width: 90%;
      padding: 0.75rem;
    }
    
    .carousel-caption h2 {
      font-size: 1.2rem;
    }
    
    .carousel-caption p {
      display: none; /* Ocultar descripción en pantallas muy pequeñas */
    }
  }
</style>

<section class="hero-carousel">
  <div class="container-max-widths">
    <div class="carousel-container">
      <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicadores -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <!-- Slides del carrusel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url('/assets/img/carousel1.jpg') ?>" class="carousel-image" alt="Colección de Mates Premium">
            <div class="carousel-caption">
              <h2>Colección de Mates Premium</h2>
              <p>Descubrí nuestra selección de mates artesanales de la más alta calidad</p>
              <a href="<?php echo base_url('inicio'); ?>" class="carousel-btn z-3 position-relative">Ver colección</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('/assets/img/carousel2.jpg') ?>" class="carousel-image" alt="Sets Materos Completos">
            <div class="carousel-caption">
              <h2>Sets Materos Completos</h2>
              <p>Todo lo que necesitás para disfrutar del mejor mate en un solo lugar</p>
              <a href="<?php echo base_url('inicio'); ?>" class="carousel-btn z-3 position-relative">Ver sets</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('/assets/img/carousel3.jpg') ?>" class="carousel-image" alt="Ofertas Especiales">
            <div class="carousel-caption">
              <h2>Ofertas Especiales</h2>
              <p>Aprovechá nuestros descuentos exclusivos por tiempo limitado</p>
              <a href="<?php echo base_url('inicio'); ?>" class="carousel-btn z-3 position-relative">Ver ofertas</a>
            </div>
          </div>
        </div>
        <!-- Controles de navegación -->
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
    </div>
  </div>
</section>