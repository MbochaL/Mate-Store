<div class="container mt-4">
  <h2>Categorías</h2>

  <?php if (session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
  <?php endif; ?>

  <a href="<?= base_url('categorias/crear') ?>" class="add-boton-table mb-3">Nueva Categoría</a>
  <div class="table-responsive d-flex justify-content-center w-75">
    <table class="table table-bordered table-sm align-middle text-center">
      <thead class="table-secondary">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($categorias as $categoria): ?>
          <tr>
            <td><?= $categoria['id_categoria'] ?></td>
            <td><?= esc($categoria['nombre_categoria']) ?></td>
            <td>
              <a href="<?= base_url('categorias/editar/' . $categoria['id_categoria']) ?>" class="edit-boton-table gap-1">
                <i class="bi bi-pencil-square"></i><span class="d-none d-md-inline">Editar</span>
              </a>
              <a href="<?= base_url('categorias/eliminar/' . $categoria['id_categoria']) ?>" class="delete-boton-table gap-1" onclick="return confirm('¿Eliminar este producto?')">
                <i class="bi bi-trash3"></i><span class="d-none d-md-inline">Eliminar</span>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>