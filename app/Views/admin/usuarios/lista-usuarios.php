<div class="container mt-4">
  <h2>Listado de Usuarios</h2>

  <?php if (session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
  <?php endif; ?>

  <a href="<?= base_url('usuarios/crear') ?>" class="add-boton-table">Nuevo Usuario</a>

  <table class="table table-bordered">
    <thead>
      <tr class="table-secondary">
        <th>Nombre</th>
        <th>Email</th>
        <th>DNI</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Estado</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($usuarios as $usuario): ?>
        <tr>
          <td><?= esc($usuario['nombre_usuario'] . ' ' . $usuario['apellido_usuario']) ?></td>
          <td><?= esc($usuario['email_usuario']) ?></td>
          <td><?= esc($usuario['dni_usuario']) ?></td>
          <td><?= esc($usuario['telefono_usuario']) ?></td>
          <td><?= esc($usuario['direccion_usuario']) ?></td>
          <td><?= $usuario['estado_usuario'] ? 'Activo' : 'Inactivo' ?></td>
          <td>
            <a href="<?= base_url('usuarios/editar/' . $usuario['id_usuario']) ?>" class="edit-boton-table">
              <span class="bi bi-person-lines-fill"> Modificar</span>
            </a>
            <a href="<?= base_url('usuarios/eliminar/' . $usuario['id_usuario']) ?>" class="delete-boton-table" onclick="return confirm('¿Eliminar este usuario?')">
              <span class="bi bi-person-x"> Dar de Baja</span>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>