<div class="container mt-4">
    <h2>Detalle del Producto</h2>

    <div class="row">
        <div class="col-md-6">
            <?php if ($producto['img_producto']): ?>
                <img src="<?= base_url('assets/uploads/' . $producto['img_producto']) ?>" class="img-fluid rounded mb-3" alt="<?= esc($producto['nombre_producto']) ?>">
            <?php else: ?>
                <p class="text-muted">Sin imagen</p>
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <h3><?= esc($producto['nombre_producto']) ?></h3>
            <p><strong>Descripción:</strong><br> <?= esc($producto['descripcion_producto']) ?></p>
            <p><strong>Precio:</strong> $<?= number_format($producto['precio_producto'], 2, ',', '.') ?></p>
            <p><strong>Stock:</strong> <?= $producto['stock_producto'] ?></p>
            <p><strong>Categoría:</strong> <?= esc($producto['nombre_categoria']) ?></p>
            <p><strong>Estado:</strong> <?= $producto['estado_producto'] ? 'Activo' : 'Inactivo' ?></p>

            <a href="<?= base_url('productos') ?>" class="edit-boton-table mt-3">Volver al listado</a>
        </div>
    </div>
</div>