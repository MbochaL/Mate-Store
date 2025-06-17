<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="page-title display-5"><?= isset($titulo) ? esc($titulo) : 'Catálogo de Productos' ?></h1>
        <p class="lead">Descubrí todos nuestros artículos disponibles</p>
    </div>

    <?php if (empty($productos)): ?>
        <div class="alert alert-info text-center">No hay productos disponibles en este momento.</div>
    <?php else: ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <?php foreach ($productos as $producto): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-product">
                        <div class="product-image-container">
                            <img src="<?= base_url('assets/uploads/' . $producto['img_producto']) ?>"
                                alt="<?= esc($producto['nombre_producto']) ?>" class="product-image">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><?= esc($producto['nombre_producto']) ?></h3>
                            <p class="product-description"><?= esc($producto['descripcion_producto']) ?></p>

                            <div class="product-meta">
                                <div class="product-price-container">
                                    <span class="product-price">$<?= number_format($producto['precio_producto'], 2, ',', '.') ?></span>
                                </div>
                            </div>

                            <div class="product-actions mt-3">
                                <a href="<?= base_url('producto/' . $producto['id_producto']) ?>" class="product-btn">
                                    Comprar ahora <i class="bi bi-arrow-right btn-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <section class="categories-showcase mt-5">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Categorías</h2>
                </div>

                <div class="row g-4 d-flex align-items-center justify-content-md-center text-wrap">
                    <!-- Categoría 1: Mates -->
                    <div class="col-lg-4 col-md-6">
                        <div class="category-container">
                            <div class="category-main">
                                <div class="category-image-container">
                                    <img src="<?php echo base_url('/assets/img/mate-imperial.jpg'); ?>" alt="Mates" class="category-image">
                                </div>
                                <div class="category-content">
                                    <h3 class="category-title">Mates</h3>
                                    <p class="category-description">Descubrí nuestra colección de mates artesanales, desde los tradicionales de calabaza hasta los modernos de cerámica y silicona.</p>
                                    <div class="category-action column-gap-3">
                                        <span class="product-count">45 productos</span>
                                        <a href="<?= base_url('catalogo/categoria/Mate') ?>" class="category-btn">
                                            Ver Mates <i class="bi bi-arrow-right btn-icon"></i>
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
                                </div>
                                <div class="category-content">
                                    <h3 class="category-title">Bombillas</h3>
                                    <p class="category-description">Elegí entre nuestra variedad de bombillas de alpaca, acero inoxidable y plata, con diferentes diseños y acabados, ideales para cada ocasión.</p>
                                    <div class="category-action column-gap-3">
                                        <span class="product-count">28 productos</span>
                                        <a href="<?= base_url('catalogo/categoria/Bombilla') ?>" class="category-btn">
                                            Ver Bombillas <i class="bi bi-arrow-right btn-icon"></i>
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
                                </div>
                                <div class="category-content">
                                    <h3 class="category-title">Termos</h3>
                                    <p class="category-description">Mantené tu agua caliente por más tiempo con nuestros termos de alta calidad, ideales para disfrutar del mate en cualquier lugar.</p>
                                    <div class="category-action column-gap-3">
                                        <span class="product-count">32 productos</span>
                                        <a href="<?= base_url('catalogo/categoria/Termo'); ?>" class="category-btn">
                                            Ver Termos <i class="bi bi-arrow-right btn-icon"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="category-decoration"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>