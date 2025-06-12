<div class="container table-container mt-4 py-5">
  <h2 class="mb-4">Carrito de Compras</h2>

  <?php if (session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
  <?php endif; ?>

  <?php if (!empty($cart = \Config\Services::cart()->contents())): ?>
    <div class="table-responsive">
      <table class="table table-bordered table-sm align-middle text-center">
        <thead class="table-secondary">
          <tr>
            <th>Imagen</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($cart as $producto): ?>
            <tr>
              <td>
                <?php if ($producto['options']['image']): ?>
                  <img src="<?= base_url('/assets/uploads/' . $producto['options']['image']) ?>" alt="Imagen" style="max-width: 50px; max-height: 50px;">
                <?php else: ?>
                  <span class="text-muted">Sin imagen</span>
                <?php endif; ?>
              </td>
              <td><?= esc($producto['name']) ?></td>
              <td>$<?= number_format($producto['price'], 2, ',', '.') ?></td>
              <td>
                <div class="d-flex justify-content-center align-items-center">
                  <a href="<?= base_url('carrito/modificar_cantidad/menos/' . $producto['rowid']) ?>" class="btn btn-sm btn-outline-secondary me-2">-</a>
                  <span><?= $producto['qty'] ?></span>
                  <a href="<?= base_url('carrito/modificar_cantidad/mas/' . $producto['rowid']) ?>" class="btn btn-sm btn-outline-secondary ms-2">+</a>
                </div>
              </td>
              <td>$<?= number_format($producto['subtotal'], 2, ',', '.') ?></td>
              <td>
                <a href="<?= base_url('carrito/eliminar_producto/' . $producto['rowid']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este producto del carrito?')">
                  <i class="bi bi-trash3"></i><span class="d-none d-md-inline"> Eliminar</span>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="4" class="text-end"><strong>Total:</strong></td>
            <td colspan="2" class="text-center"><strong>$<?= number_format(\Config\Services::cart()->total(), 2, ',', '.') ?></strong></td>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="d-flex justify-content-between mt-4">
      <a href="<?= base_url('catalogo') ?>" class="btn btn-secondary">Seguir comprando</a>
      <div>
        <a href="<?= base_url('carrito/vaciar_carrito') ?>" class="btn btn-danger me-2">Vaciar carrito</a>
        <a href="<?= base_url('facturas/guardar') ?>" class="btn btn-success">Finalizar compra</a>
      </div>
    </div>

  <?php else: ?>
    <div class="alert alert-info text-center">
      Tu carrito está vacío.
    </div>
    <div class="text-center py-5">
      <a href="<?= base_url('catalogo') ?>" class="edit-boton-table">Ir a productos</a>
    </div>
  <?php endif; ?>
</div>