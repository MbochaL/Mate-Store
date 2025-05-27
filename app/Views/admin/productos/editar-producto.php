<div class="container mt-4">
    <h2>Editar Producto</h2>

    <?php if (session('validation')): ?>
        <div class="alert alert-danger">
            <?php foreach (session('validation') as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('productos/actualizar/' . $producto['id_producto']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="nombre_producto" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre_producto" value="<?= esc($producto['nombre_producto']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="descripcion_producto" class="form-label">Descripción</label>
            <textarea class="form-control" name="descripcion_producto" required><?= esc($producto['descripcion_producto']) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="precio_producto" class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" name="precio_producto" value="<?= esc($producto['precio_producto']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="stock_producto" class="form-label">Stock</label>
            <input type="number" class="form-control" name="stock_producto" value="<?= esc($producto['stock_producto']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="id_categoria" class="form-label">Categoría</label>
            <select class="form-select" name="id_categoria" required>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['id_categoria'] ?>" <?= $producto['id_categoria'] == $categoria['id_categoria'] ? 'selected' : '' ?>>
                        <?= esc($categoria['nombre_categoria']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="estado_producto" class="form-label">Estado</label>
            <select class="form-select" name="estado_producto" required>
                <option value="1" <?= $producto['estado_producto'] == 1 ? 'selected' : '' ?>>Activo</option>
                <option value="0" <?= $producto['estado_producto'] == 0 ? 'selected' : '' ?>>Inactivo</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="img_producto" class="form-label">Imagen (opcional)</label><br>
            <?php if ($producto['img_producto']): ?>
                <img src="<?= base_url('uploads/' . $producto['img_producto']) ?>" width="100" class="mb-2"><br>
            <?php endif; ?>
            <input type="file" class="form-control" name="img_producto" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?= base_url('productos') ?>" class="btn btn-secondary">Volver</a>
    </form>
</div>