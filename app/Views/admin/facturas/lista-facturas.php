<div class="container mt-4">
    <h2>Listado de Facturas</h2>

    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-bordered table-sm text-center align-middle">
            <thead class="table-secondary">
                <tr>
                    <th class="d-none d-sm-table-cell">Cliente</th>
                    <th class="d-none d-md-table-cell">Fecha</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($facturas as $factura): ?>
                    <tr>
                        <td class="d-none d-sm-table-cell"><?= esc($factura['nombre_usuario'] . ' ' . $factura['apellido_usuario']) ?></td>
                        <td class="d-none d-md-table-cell"><?= $factura['fecha_factura'] ?></td>
                        <td>$<?= number_format($factura['total_factura'], 2, ',', '.') ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="<?= base_url('facturas/ver/' . $factura['id_factura']) ?>" class="btn btn-sm btn-info d-flex align-items-center gap-1">
                                    <i class="bi bi-eye"></i><span class="d-none d-sm-inline">Ver</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>