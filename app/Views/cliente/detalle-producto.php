<div class="producto-detalle-page">
    <div class="container">
        <a href="<?= base_url('inicio') ?>" class="producto-detalle-btn-primary mb-4">
            <i class="bi bi-house me-2"></i> Volver al Inicio
        </a>
        <div class="producto-detalle-container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="producto-detalle-image-section">
                        <?php if ($producto['img_producto']): ?>
                            <div class="producto-detalle-image-container">
                                <img src="<?= base_url('assets/uploads/' . $producto['img_producto']) ?>"
                                    class="producto-detalle-image"
                                    alt="<?= esc($producto['nombre_producto']) ?>">
                            </div>
                        <?php else: ?>
                            <div class="producto-detalle-no-image">
                                <i class="bi bi-image fs-1 mb-2"></i>
                                <span>Sin imagen disponible</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="producto-detalle-info">
                        <h1 class="producto-detalle-title"><?= esc($producto['nombre_producto']) ?></h1>

                        <div class="producto-detalle-meta">
                            <div class="producto-detalle-meta-item">
                                <i class="bi bi-tag producto-detalle-meta-icon"></i>
                                <span><?= esc($producto['nombre_categoria']) ?></span>
                            </div>
                            <?php if ($producto['estado_producto'] && $producto['stock_producto'] > 0): ?>
                                <div class="producto-detalle-meta-item">
                                    <i class="bi bi-check-circle producto-detalle-meta-icon"></i>
                                    <span>En stock: <?= $producto['stock_producto'] ?> unidades</span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="producto-detalle-price-container">
                            <div class="producto-detalle-price">$<?= number_format($producto['precio_producto'], 2, ',', '.') ?></div>
                        </div>

                        <div class="producto-detalle-description">
                            <strong>Descripción:</strong><br>
                            <?= esc($producto['descripcion_producto']) ?>
                        </div>

                        <div class="producto-detalle-actions">
                            <a href="<?= base_url('catalogo') ?>" class="producto-detalle-btn-secondary">
                                <i class="bi bi-arrow-left me-2"></i> Ir al catálogo
                            </a>

                            <?php if ($producto['estado_producto'] && $producto['stock_producto'] > 0): ?>

                                <?php if (session()->has('id_usuario')): ?>
                                    <form action="<?= base_url('carrito/agregar_carrito') ?>" method="post">
                                        <input type="hidden" name="id_producto" value="<?= esc($producto['id_producto']) ?>">
                                        <input type="hidden" name="nombre_producto" value="<?= esc($producto['nombre_producto']) ?>">
                                        <input type="hidden" name="precio_producto" value="<?= esc($producto['precio_producto']) ?>">
                                        <input type="hidden" name="img_producto" value="<?= esc($producto['img_producto']) ?>">
                                        <button type="submit" class="producto-detalle-btn-primary">
                                            <i class="bi bi-cart-plus me-2"></i> Añadir al carrito
                                        </button>
                                    </form>
                                <?php else: ?>
                                    <div class="producto-detalle-alert">
                                        <i class="bi bi-lock me-2"></i> Debes <a href="<?= base_url('login') ?>">iniciar sesión</a> para comprar.
                                    </div>
                                <?php endif; ?>

                            <?php else: ?>
                                <div class="producto-detalle-alert mt-3">
                                    <i class="bi bi-exclamation-triangle me-2"></i> Producto no disponible actualmente.
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>