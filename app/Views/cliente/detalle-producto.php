<div class="container py-5">
    <div class="row g-4 align-items-center">
        <div class="col-md-6">
            <?php if ($producto['img_producto']): ?>
                <img src="<?= base_url('assets/uploads/' . $producto['img_producto']) ?>" class="img-fluid rounded shadow-sm" alt="<?= esc($producto['nombre_producto']) ?>">
            <?php else: ?>
                <div class="alert alert-secondary text-center">Sin imagen disponible</div>
            <?php endif; ?>
        </div>

        <div class="col-md-6">
            <h2 class="display-6"><?= esc($producto['nombre_producto']) ?></h2>
            <p class="text-muted mb-1">Categoría: <?= esc($producto['nombre_categoria']) ?></p>
            <p class="text-muted">Estado: <?= $producto['estado_producto'] ? 'Disponible' : 'No disponible' ?></p>

            <h3 class="text-primary mt-4">$<?= number_format($producto['precio_producto'], 2, ',', '.') ?></h3>

            <p class="mt-3"><?= esc($producto['descripcion_producto']) ?></p>

            <?php if ($producto['estado_producto'] && $producto['stock_producto'] > 0): ?>
                <a href="#" class="btn btn-dark btn-lg mt-3">
                    <i class="bi bi-cart-plus"></i> Comprar
                </a>
            <?php else: ?>
                <div class="alert alert-warning mt-3">Producto no disponible por el momento.</div>
            <?php endif; ?>
            <a href="<?= base_url('catalogo') ?>" class="btn btn-dark btn-lg mt-3">
                <i class="bi bi-arrow-left"></i> Volver al catalogo
            </a>
        </div>
    </div>
</div>