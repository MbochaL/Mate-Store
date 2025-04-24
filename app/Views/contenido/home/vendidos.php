<style>
    /* Estilos para la sección de bienvenida y productos destacados */
    .welcome-section {
        padding: 5rem 0;
        position: relative;
        overflow: hidden;
    }

    .welcome-header {
        position: relative;
        margin-bottom: 4rem;
    }

    .welcome-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #59220e;
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
    }

    .welcome-title span {
        color: #59220e;
        position: relative;
    }

    .welcome-title span::after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 0;
        width: 100%;
        height: 8px;
        background-color: rgba(242, 239, 187, 0.6);
        z-index: -1;
    }

    .welcome-description {
        font-size: 1.1rem;
        color: #59220e;
        opacity: 0.8;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.7;
    }

    .welcome-decoration {
        position: absolute;
        width: 150px;
        height: 150px;
        background-color: rgba(242, 239, 187, 0.2);
        border-radius: 50%;
        z-index: -1;
    }

    .decoration-1 {
        top: -50px;
        left: -50px;
    }

    .decoration-2 {
        bottom: -70px;
        right: -70px;
        width: 200px;
        height: 200px;
    }

    /* Estilos para las tarjetas de productos */
    .featured-product {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(89, 34, 14, 0.1);
        transition: all 0.4s ease;
        height: 100%;
        background-color: #fff;
    }

    .featured-product:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(89, 34, 14, 0.15);
    }

    .product-image-container {
        position: relative;
        padding: 2rem;
        background-color: rgba(242, 239, 187, 0.1);
        text-align: center;
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .product-image {
        max-width: 100%;
        max-height: 200px;
        object-fit: contain;
        transition: all 0.5s ease;
    }

    .featured-product:hover .product-image {
        transform: scale(1.1) rotate(3deg);
    }

    .product-tag {
        position: absolute;
        top: 15px;
        left: 0;
        background-color: #59220e;
        color: #fff;
        padding: 5px 15px;
        font-size: 0.8rem;
        font-weight: 600;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        box-shadow: 0 3px 10px rgba(89, 34, 14, 0.2);
        z-index: 1;
    }

    .product-content {
        padding: 2rem;
        position: relative;
    }

    .product-title {
        font-weight: 700;
        color: #59220e;
        margin-bottom: 0.5rem;
        font-size: 1.3rem;
    }

    .product-description {
        color: #59220e;
        opacity: 0.8;
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }

    .product-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .product-rating {
        display: flex;
        align-items: center;
    }

    .rating-stars {
        color: #ffc107;
        margin-right: 5px;
    }

    .rating-count {
        color: #59220e;
        opacity: 0.7;
        font-size: 0.9rem;
    }

    .product-price-container {
        display: flex;
        align-items: center;
    }

    .product-price {
        font-weight: 800;
        font-size: 1.4rem;
        color: #59220e;
        margin-right: 10px;
    }

    .product-old-price {
        text-decoration: line-through;
        color: #59220e;
        opacity: 0.5;
        font-size: 1rem;
    }

    .product-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .product-btn {
        background-color: #59220e;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
    }

    .product-btn:hover {
        background-color: #4a1c0c;
        transform: translateX(5px);
        color: #fff;
    }

    .btn-icon {
        margin-left: 8px;
        transition: all 0.3s ease;
    }

    .featured-product:hover .btn-icon {
        transform: translateX(3px);
    }

    .wishlist-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(242, 239, 187, 0.3);
        color: #59220e;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        transition: all 0.3s ease;
    }

    .wishlist-btn:hover {
        background-color: #59220e;
        color: #fff;
        transform: scale(1.1);
    }

    .product-badge {
        position: absolute;
        top: -15px;
        right: 20px;
        background-color: #f2efbb;
        color: #59220e;
        font-weight: 700;
        padding: 5px 15px;
        border-radius: 20px;
        box-shadow: 0 5px 15px rgba(89, 34, 14, 0.1);
        z-index: 1;
    }

    .badge-bestseller {
        background-color: #198754;
        color: #fff;
    }

    .badge-new {
        background-color: #0d6efd;
        color: #fff;
    }

    .badge-sale {
        background-color: #dc3545;
        color: #fff;
    }

    .product-features {
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px dashed rgba(89, 34, 14, 0.2);
    }

    .feature-item {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
        color: #59220e;
        font-size: 0.9rem;
    }

    .feature-icon {
        color: #59220e;
        margin-right: 8px;
        font-size: 0.8rem;
    }
</style>

<section class="welcome-section">
    <div class="container">
        <div class="welcome-decoration decoration-1"></div>
        <div class="welcome-decoration decoration-2"></div>

        <div class="welcome-header text-center">
            <h2 class="welcome-title">Bienvenidos a <span>Mateando</span></h2>
            <p class="welcome-description">Somos una tienda especializada en productos para el mate. Ofrecemos artículos de alta calidad seleccionados cuidadosamente para que disfrutes de esta tradición argentina como se merece.</p>
        </div>

        <div class="row g-4">
            <!-- Producto Mate -->
            <div class="col-md-4">
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
                                <span class="product-price">$1,500</span>
                            </div>
                        </div>

                        <div class="product-actions mt-3">
                            <a href="#" class="product-btn">
                                Comprar ahora <i class="bi bi-arrow-right btn-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Producto Bombilla -->
            <div class="col-md-4">
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
                                <span class="product-price">$800</span>
                            </div>
                        </div>

                        <div class="product-actions mt-3">
                            <a href="#" class="product-btn">
                                Comprar ahora <i class="bi bi-arrow-right btn-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Producto Termo -->
            <div class="col-md-4">
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
                                <span class="product-price">$2,000</span>
                            </div>
                        </div>

                        <div class="product-actions mt-3">
                            <a href="#" class="product-btn">
                                Comprar ahora <i class="bi bi-arrow-right btn-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="view-all-container">
            <a href="<?php echo base_url('/productos'); ?>" class="view-all-btn">
                Ver todos los productos <i class="bi bi-grid view-all-icon"></i>
            </a>
        </div>
    </div>
</section>