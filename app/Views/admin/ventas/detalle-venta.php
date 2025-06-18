<div class="container mt-4">
    <h2>Detalle de Venta #<?= $factura['id_factura'] ?></h2>

    <p><strong>Cliente:</strong> <?= esc($factura['nombre_usuario'] . ' ' . $factura['apellido_usuario']) ?></p>
    <p><strong>Fecha:</strong> <?= $factura['fecha_factura'] ?></p>
    <p><strong>Total:</strong> $<?= number_format($factura['total_factura'], 2, ',', '.') ?></p>

    <h5>Productos:</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($venta as $linea): ?>
                <tr>
                    <td><?= esc($linea['nombre_producto']) ?></td>
                    <td><?= esc($linea['cantidad_venta']) ?></td>
                    <td>$<?= number_format($linea['precio_unitario_venta'], 2, ',', '.') ?></td>
                    <td>$<?= number_format($linea['cantidad_venta'] * $linea['precio_unitario_venta'], 2, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="<?= base_url('ventas') ?>" class="edit-boton-table">Volver</a>
</div>