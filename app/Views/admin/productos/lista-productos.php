<div class="container table-container mt-4">
    <h2 class="mb-3">Listado de Productos</h2>

    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
    <?php endif; ?>

    <a href="<?= base_url('productos/crear') ?>" class="add-boton-table mb-3">Nuevo Producto</a>

    <div class="table-responsive">
        <table class="table table-bordered table-sm align-middle text-center">
            <thead class="table-secondary">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th class="d-none d-lg-table-cell">Estado</th>
                    <th class="d-none d-lg-table-cell">Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?= esc($producto['nombre_producto']) ?></td>
                        <td>$<?= number_format($producto['precio_producto'], 2, ',', '.') ?></td>
                        <td><?= esc($producto['stock_producto']) ?></td>

                        <td class="d-none d-lg-table-cell">
                            <?= $producto['estado_producto'] ? 'Activo' : 'Inactivo' ?>
                        </td>

                        <td class="d-none d-lg-table-cell">
                            <?php if ($producto['img_producto']): ?>
                                <img src="<?= base_url('assets/uploads/' . $producto['img_producto']) ?>" alt="Imagen" style="max-width: 50px; max-height: 50px;">
                            <?php else: ?>
                                <span class="text-muted">Sin imagen</span>
                            <?php endif; ?>
                        </td>

                        <td>
                            <div class="d-flex flex-wrap gap-1 justify-content-start align-items-center">
                                <a href="<?= base_url('productos/ver/' . $producto['id_producto']) ?>" class="edit-boton-table d-flex align-items-center gap-1">
                                    <i class="bi bi-search"></i><span class="d-none d-lg-inline">Ver</span>
                                </a>
                                <a href="<?= base_url('productos/editar/' . $producto['id_producto']) ?>" class="edit-boton-table d-flex align-items-center gap-1">
                                    <i class="bi bi-pencil-square"></i><span class="d-none d-lg-inline">Editar</span>
                                </a>
                                <a href="<?= base_url('productos/eliminar/' . $producto['id_producto']) ?>" class="delete-boton-table d-flex align-items-center gap-1" onclick="return confirm('¿Eliminar este producto?')">
                                    <i class="bi bi-trash3"></i><span class="d-none d-lg-inline">Eliminar</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>