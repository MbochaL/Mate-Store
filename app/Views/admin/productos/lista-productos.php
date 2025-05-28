<div class="container table-container mt-4 h-100">
  <h2>Listado de Productos</h2>

  <?php if (session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
  <?php endif; ?>

  <a href="<?= base_url('productos/crear') ?>" class="add-boton-table">Nuevo Producto</a>

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
          <td><?= esc($producto['nombre_producto']) ?></td>
          <td>$<?= esc($producto['precio_producto']) ?></td>
          <td><?= esc($producto['stock_producto']) ?></td>
          <td><?= $producto['estado_producto'] ? 'Activo' : 'Inactivo' ?></td>
          <td>
            <?php if ($producto['img_producto']): ?>
              <img src="<?= base_url('assets/uploads/' . $producto['img_producto']) ?>" style="max-width: 30px; max-height: 30px;">
            <?php endif; ?>
          </td>
          <td>
            <a href="<?= base_url('productos/editar/' . $producto['id_producto']) ?>" class="edit-boton-table ">
              <span class="bi bi-pencil-square"> Editar</span>
            </a>
            <a href="<?= base_url('productos/eliminar/' . $producto['id_producto']) ?>" class="delete-boton-table" onclick="return confirm('¿Eliminar este producto?')">
              <span class="bi bi-trash3"> Eliminar</span>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>