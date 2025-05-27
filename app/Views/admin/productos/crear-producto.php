<div class="container mt-4 h-100">
    <h2>Crear Producto</h2>

    <?php if (session('validation')): ?>
        <div class="alert alert-danger">
            <?php foreach (session('validation') as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('productos/guardar') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="nombre_producto" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre_producto" value="<?= old('nombre_producto') ?>" required>
        </div>

        <div class="mb-3">
            <label for="descripcion_producto" class="form-label">Descripción</label>
            <textarea class="form-control" name="descripcion_producto" required><?= old('descripcion_producto') ?></textarea>
        </div>

        <div class="mb-3">
            <label for="precio_producto" class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" name="precio_producto" value="<?= old('precio_producto') ?>" required>
        </div>

        <div class="mb-3">
            <label for="stock_producto" class="form-label">Stock</label>
            <input type="number" class="form-control" name="stock_producto" value="<?= old('stock_producto') ?>" required>
        </div>

        <div class="mb-3">
            <label for="id_categoria" class="form-label">Categoría</label>
            <select class="form-select" name="id_categoria" required>
                <option value="">Seleccionar</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['id_categoria'] ?>"><?= esc($categoria['nombre_categoria']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="estado_producto" class="form-label">Estado</label>
            <select class="form-select" name="estado_producto" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="img_producto" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="img_producto" accept="image/*">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?= base_url('productos') ?>" class="btn btn-secondary">Volver</a>
    </form>
</div>