<div class="container mt-4">
    <h2>Listado de Ventas</h2>

    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
    <?php endif; ?>

    <a href="<?= base_url('ventas/crear') ?>" class="add-boton-table">Nueva Venta</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($facturas as $factura): ?>
                <tr>
                    <td><?= $factura['id_factura'] ?></td>
                    <td><?= esc($factura['nombre_usuario'] . ' ' . $factura['apellido_usuario']) ?></td>
                    <td><?= $factura['fecha_factura'] ?></td>
                    <td>$<?= number_format($factura['total_factura'], 2, ',', '.') ?></td>
                    <td>
                        <a href="<?= base_url('ventas/ver/' . $factura['id_factura']) ?>" class="edit-boton-table">Ver</a>
                        <a href="<?= base_url('ventas/eliminar/' . $factura['id_factura']) ?>" class="delete-boton-table" onclick="return confirm('¿Eliminar esta venta?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>