<div class="container table-container mt-4 h-100">
  <h2>Listado de Productos</h2>

  <?php if (session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
  <?php endif; ?>

  <a href="<?= base_url('productos/crear') ?>" class="add-boton-table">Nuevo Producto</a>

  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr class="table-secondary">
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
            <td scope="row" class="align-content-center"><?= esc($producto['nombre_producto']) ?></td>
            <td scope="row" class="align-content-center">$<?= esc($producto['precio_producto']) ?></td>
            <td scope="row" class="align-content-center"><?= esc($producto['stock_producto']) ?></td>
            <td scope="row" class="align-content-center"><?= $producto['estado_producto'] ? 'Activo' : 'Inactivo' ?></td>
            <td scope="row" class="align-content-center">
              <?php if ($producto['img_producto']): ?>
                <img src="<?= base_url('assets/upload/' . $producto['img_producto']) ?>" style="max-width: 50px; max-height: 50px;">
              <?php endif; ?>
            </td>
            <td scope="row" class="align-content-center">
              <a href="<?= base_url('productos/editar/' . $producto['id_producto']) ?>" class="edit-boton-table bi bi-pencil-square">
                <span class="d-none d-lg-inline">Editar</span>
              </a>
              <a href="<?= base_url('productos/eliminar/' . $producto['id_producto']) ?>" class="delete-boton-table bi bi-trash3" onclick="return confirm('¿Eliminar este producto?')">
                <span class="d-none d-lg-inline"> Eliminar</span>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>