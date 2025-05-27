<div class="container table-container mt-4 h-100">
    <h2>Listado de Productos</h2>

    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
    <?php endif; ?>

    <a href="<?= base_url('productos/crear') ?>" class="add-boton-table">Nuevo Producto</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Estado</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= esc($producto['nombre_producto']) ?></td>
                    <td>$<?= esc($producto['precio_producto']) ?></td>
                    <td><?= esc($producto['stock_producto']) ?></td>
                    <td><?= $producto['estado_producto'] ? 'Activo' : 'Inactivo' ?></td>
                    <td>
                        <?php if ($producto['img_producto']): ?>
                            <img src="<?= base_url('uploads/' . $producto['img_producto']) ?>" width="50">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('productos/editar/' . $producto['id_producto']) ?>" class="edit-boton-table">Editar</a>
                        <a href="<?= base_url('productos/eliminar/' . $producto['id_producto']) ?>" class="delete-boton-table" onclick="return confirm('¿Eliminar este producto?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>