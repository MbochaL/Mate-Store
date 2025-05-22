<style>
  /* Estilos para la sección de categorías */
  .categories-showcase {
    padding: 5rem 0;
    background-color: rgba(242, 239, 187, 0.1);
    position: relative;
  }

  .section-header {
    text-align: center;
    margin-bottom: 3rem;
  }

  .categories-showcase::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(to right, transparent, #f2efbb, transparent);
  }

  .section-title {
    color: #59220e;
    font-weight: 700;
    position: relative;
    display: inline-block;
    padding-bottom: 15px;
    margin-bottom: 1rem;
  }

  .section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background-color: #f2efbb;
  }

  .section-subtitle {
    color: #59220e;
    opacity: 0.8;
    max-width: 700px;
    margin: 0 auto;
  }

  .category-container {
    position: relative;
    margin-bottom: 3rem;
  }

  .category-main {
    background-color: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(89, 34, 14, 0.1);
    position: relative;
    z-index: 1;
    height: 100%;
    transition: all 0.4s ease;
  }

  .category-container:hover .category-main {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(89, 34, 14, 0.2);
  }

  .category-image-container {
    position: relative;
    height: 300px;
    overflow: hidden;
  }

  .category-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: all 0.7s ease;
  }

  .category-container:hover .category-image {
    transform: scale(1.1);
  }

  .category-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background-color: #59220e;
    color: #fff;
    padding: 8px 15px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 0.9rem;
    z-index: 2;
    box-shadow: 0 5px 15px rgba(89, 34, 14, 0.3);
  }

  .category-content {
    padding: 2rem;
    position: relative;
  }

  .category-icon {
    position: absolute;
    top: -30px;
    left: 30px;
    width: 60px;
    height: 60px;
    background-color: #f2efbb;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    color: #59220e;
    box-shadow: 0 5px 15px rgba(89, 34, 14, 0.2);
    transition: all 0.3s ease;
  }

  .category-container:hover .category-icon {
    transform: rotateY(180deg);
  }

  .category-title {
    color: #59220e;
    font-weight: 700;
    margin-bottom: 1rem;
    padding-left: 70px;
  }

  .category-description {
    color: #59220e;
    opacity: 0.8;
    margin-bottom: 1.5rem;
  }

  .category-features {
    margin-bottom: 1.5rem;
  }

  .feature-item {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
    color: #59220e;
  }

  .feature-icon {
    color: #59220e;
    margin-right: 10px;
    font-size: 0.8rem;
  }

  .category-action {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .product-count {
    background-color: rgba(242, 239, 187, 0.3);
    color: #59220e;
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.9rem;
  }

  .category-btn {
    background-color: #59220e;
    border: none;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
    text-decoration: none;
  }

  @media (max-width: 1150px) {
    .category-btn {
      padding: 4px 8px;
    }

    .product-count {
      padding: 5px 10px;
    }
  }

  @media (max-width: 500px) {
    .category-action {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-direction: column;
      gap: 10px;
    }

    .category-btn {
      padding: 10px 20px;
    }

    .product-count {
      padding: 5px 15px;
    }
  }

  .category-btn:hover {
    background-color: #4a1c0c;
    transform: translateX(5px);
    color: #fff;
  }

  .btn-icon {
    margin-left: 8px;
    transition: all 0.3s ease;
  }

  .category-container:hover .btn-icon {
    transform: translateX(5px);
  }

  .category-decoration {
    position: absolute;
    bottom: -20px;
    right: -20px;
    width: 100px;
    height: 100px;
    background-color: rgba(242, 239, 187, 0.2);
    border-radius: 50%;
    z-index: 0;
  }

  .category-decoration::before {
    content: '';
    position: absolute;
    top: 20px;
    left: 20px;
    width: 60px;
    height: 60px;
    background-color: rgba(242, 239, 187, 0.3);
    border-radius: 50%;
  }

  .category-decoration::after {
    content: '';
    position: absolute;
    top: 35px;
    left: 35px;
    width: 30px;
    height: 30px;
    background-color: rgba(242, 239, 187, 0.4);
    border-radius: 50%;
  }

  .view-all-container {
    text-align: center;
    margin-top: 2rem;
  }

  .view-all-btn {
    background-color: transparent;
    border: 2px solid #59220e;
    color: #59220e;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
  }

  .view-all-btn:hover {
    background-color: #59220e;
    color: #fff;
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(89, 34, 14, 0.2);
  }

  .view-all-icon {
    margin-left: 8px;
  }
</style>

<section class="categories-showcase">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Nuestras Categorías</h2>
      <p class="section-subtitle">Descubrí nuestra selección de productos premium para disfrutar del mejor mate</p>
    </div>

    <div class="row g-4 d-flex align-items-center justify-content-md-center text-wrap">
      <!-- Categoría 1: Mates -->
      <div class="col-lg-4 col-md-6">
        <div class="category-container">
          <div class="category-main">
            <div class="category-image-container">
              <img src="<?php echo base_url('/assets/img/mate-imperial.jpg'); ?>" alt="Mates" class="category-image">
              <span class="category-badge">Más vendido</span>
            </div>
            <div class="category-content">
              <div class="category-icon">
                <i class="bi bi-bag-fill"></i>
              </div>
              <h3 class="category-title">Mates</h3>
              <p class="category-description">Descubrí nuestra colección de mates artesanales, desde los tradicionales de calabaza hasta los modernos de cerámica y silicona.</p>
              <div class="category-features">
                <div class="feature-item">
                  <span class="feature-icon"><i class="bi bi-check-circle-fill"></i></span>
                  <span>Mates de calabaza tradicionales</span>
                </div>
                <div class="feature-item">
                  <span class="feature-icon"><i class="bi bi-check-circle-fill"></i></span>
                  <span>Mates de cerámica y vidrio</span>
                </div>
                <div class="feature-item">
                  <span class="feature-icon"><i class="bi bi-check-circle-fill"></i></span>
                  <span>Mates imperiales y camioneros</span>
                </div>
              </div>
              <div class="category-action column-gap-3">
                <span class="product-count">45 productos</span>
                <a href="<?php echo base_url('inicio'); ?>" class="category-btn">
                  Ver todos <i class="bi bi-arrow-right btn-icon"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="category-decoration"></div>
        </div>
      </div>

      <!-- Categoría 2: Bombillas -->
      <div class="col-lg-4 col-md-6">
        <div class="category-container">
          <div class="category-main">
            <div class="category-image-container">
              <img src="<?php echo base_url('/assets/img/bombilla-mate-silver.jpg'); ?>" alt="Bombillas" class="category-image">
              <span class="category-badge">Artesanal</span>
            </div>
            <div class="category-content">
              <div class="category-icon">
                <i class="bi bi-bag-fill"></i>
              </div>
              <h3 class="category-title">Bombillas</h3>
              <p class="category-description">Elegí entre nuestra variedad de bombillas de alpaca, acero inoxidable y plata, con diferentes diseños y acabados, ideales para cada ocasión.</p>
              <div class="category-features">
                <div class="feature-item">
                  <span class="feature-icon"><i class="bi bi-check-circle-fill"></i></span>
                  <span>Bombillas de alpaca premium</span>
                </div>
                <div class="feature-item">
                  <span class="feature-icon"><i class="bi bi-check-circle-fill"></i></span>
                  <span>Bombillas de acero inoxidable</span>
                </div>
                <div class="feature-item">
                  <span class="feature-icon"><i class="bi bi-check-circle-fill"></i></span>
                  <span>Diseños tradicionales y modernos</span>
                </div>
              </div>
              <div class="category-action column-gap-3">
                <span class="product-count">28 productos</span>
                <a href="<?php echo base_url('inicio'); ?>" class="category-btn">
                  Ver todos <i class="bi bi-arrow-right btn-icon"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="category-decoration"></div>
        </div>
      </div>

      <!-- Categoría 3: Termos -->
      <div class="col-lg-4 col-md-6">
        <div class="category-container">
          <div class="category-main">
            <div class="category-image-container">
              <img src="<?php echo base_url('/assets/img/termo.jpg'); ?>" alt="Termos" class="category-image">
              <span class="category-badge">Premium</span>
            </div>
            <div class="category-content">
              <div class="category-icon">
                <i class="bi bi-bag-fill"></i>
              </div>
              <h3 class="category-title">Termos</h3>
              <p class="category-description">Mantené tu agua caliente por más tiempo con nuestros termos de alta calidad, ideales para disfrutar del mate en cualquier lugar.</p>
              <div class="category-features">
                <div class="feature-item">
                  <span class="feature-icon"><i class="bi bi-check-circle-fill"></i></span>
                  <span>Termos Stanley originales</span>
                </div>
                <div class="feature-item">
                  <span class="feature-icon"><i class="bi bi-check-circle-fill"></i></span>
                  <span>Termos de acero inoxidable</span>
                </div>
                <div class="feature-item">
                  <span class="feature-icon"><i class="bi bi-check-circle-fill"></i></span>
                  <span>Diferentes capacidades y colores</span>
                </div>
              </div>
              <div class="category-action column-gap-3">
                <span class="product-count">32 productos</span>
                <a href="<?php echo base_url('inicio'); ?>" class="category-btn">
                  Ver todos <i class="bi bi-arrow-right btn-icon"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="category-decoration"></div>
        </div>
      </div>
    </div>

    <div class="view-all-container">
      <a href="<?php echo base_url('inicio'); ?>" class="view-all-btn">
        Ver todas las categorías <i class="bi bi-grid view-all-icon"></i>
      </a>
    </div>
  </div>
</section>