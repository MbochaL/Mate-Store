<div class="container mt-4">
  <h2>Listado de Ventas</h2>

  <?php if (session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
  <?php endif; ?>

  <!-- <a href="<?= base_url('ventas/crear') ?>" class="add-boton-table mb-3 d-inline-block">Nueva Venta</a> -->

  <div class="table-responsive">
    <table class="table table-bordered table-sm text-center align-middle">
      <thead class="table-secondary">
        <tr>
          <th>#</th>
          <th class="d-none d-sm-table-cell">Cliente</th>
          <th class="d-none d-md-table-cell">Fecha</th>
          <th>Total</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($facturas as $factura): ?>
          <tr>
            <td><?= $factura['id_factura'] ?></td>
            <td class="d-none d-sm-table-cell"><?= esc($factura['nombre_usuario'] . ' ' . $factura['apellido_usuario']) ?></td>
            <td class="d-none d-md-table-cell"><?= $factura['fecha_factura'] ?></td>
            <td>$<?= number_format($factura['total_factura'], 2, ',', '.') ?></td>
            <td>
              <div class="d-flex flex-wrap justify-content-center gap-1">
                <a href="<?= base_url('ventas/ver/' . $factura['id_factura']) ?>" class="edit-boton-table d-flex align-items-center gap-1">
                  <i class="bi bi-eye"></i><span class="d-none d-lg-inline">Ver</span>
                </a>
                <!-- <a href="<?= base_url('ventas/eliminar/' . $factura['id_factura']) ?>" class="delete-boton-table d-flex align-items-center gap-1" onclick="return confirm('¿Eliminar esta venta?')">
                                    <i class="bi bi-trash2"></i><span class="d-none d-lg-inline">Eliminar</span>
                                </a> -->
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>