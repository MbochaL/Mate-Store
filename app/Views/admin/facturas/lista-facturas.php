<div class="container mt-4">
    <h2>Listado de Facturas</h2>

    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
    <?php endif; ?>

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
                        <a href="<?= base_url('facturas/ver/' . $factura['id_factura']) ?>" class="btn btn-sm btn-info">Ver</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>