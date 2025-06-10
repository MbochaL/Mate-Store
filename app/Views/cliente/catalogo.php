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
    <?php endif; ?>
</div>