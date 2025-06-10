<div class="container mt-5 py-4">
  <h2>Resumen de Compra</h2>
  <hr>

  <p><strong>Factura N°:</strong> <?= esc($factura['id_factura']) ?></p>
  <p><strong>Fecha:</strong> <?= esc($factura['fecha_factura']) ?></p>
  <p><strong>Total:</strong> $<?= number_format($factura['total_factura'], 2, ',', '.') ?></p>

  <h4 class="mt-4">Productos:</h4>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($ventas as $venta): ?>
        <tr>
          <td><?= esc($venta['producto']['nombre_producto']) ?></td>
          <td>$<?= number_format($venta['precio_unitario_venta'], 2) ?></td>
          <td><?= esc($venta['cantidad_venta']) ?></td>
          <td>$<?= number_format($venta['precio_unitario_venta'] * $venta['cantidad_venta'], 2) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <a href="<?= base_url('/') ?>" class="edit-boton-table">Volver</a>
</div>