<div class="container mt-4">
  <h2>Listado de Usuarios</h2>

  <?php if (session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
  <?php endif; ?>

<<<<<<< HEAD
  <a href="<?= base_url('usuarios/crear') ?>" class="add-boton-table">Nuevo Usuario</a>

  <div class="table-responsive">
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
            <td scope="row" class="align-content-center"><?= esc($usuario['nombre_usuario'] . ' ' . $usuario['apellido_usuario']) ?></td>
            <td scope="row" class="align-content-center"><?= esc($usuario['email_usuario']) ?></td>
            <td scope="row" class="align-content-center"><?= esc($usuario['dni_usuario']) ?></td>
            <td scope="row" class="align-content-center"><?= esc($usuario['telefono_usuario']) ?></td>
            <td scope="row" class="align-content-center"><?= esc($usuario['direccion_usuario']) ?></td>
            <td scope="row" class="align-content-center"><?= $usuario['estado_usuario'] ? 'Activo' : 'Inactivo' ?></td>
            <td scope="row" class="align-content-center">
              <a href="<?= base_url('usuarios/editar/' . $usuario['id_usuario']) ?>" class="edit-boton-table bi bi-person-lines-fill">
                <span class=" d-none d-lg-inline"> Modificar</span>
              </a>
              <a href="<?= base_url('usuarios/eliminar/' . $usuario['id_usuario']) ?>" class="delete-boton-table bi bi-person-x " onclick="return confirm('¿Eliminar este usuario?')">
                <span class="d-none d-lg-inline"> Dar de Baja</span>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
=======
    <a href="<?= base_url('usuarios/crear') ?>" class="add-boton-table mb-3 d-inline-block">Nuevo Usuario</a>

    <div class="table-responsive">
        <table class="table table-bordered table-sm text-center align-middle">
            <thead class="table-secondary">
                <tr>
                    <th>Nombre</th>
                    <th class="d-none d-lg-table-cell">Email</th>
                    <th>Rol</th>
                    <th class="d-none d-md-table-cell">DNI</th>
                    <th class="d-none d-lg-table-cell">Teléfono</th>
                    <th class="d-none d-lg-table-cell">Dirección</th>
                    <th class="d-none d-lg-table-cell">Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= esc($usuario['nombre_usuario'] . ' ' . $usuario['apellido_usuario']) ?></td>
                        <td class="d-none d-lg-table-cell"><?= esc($usuario['email_usuario']) ?></td>
                        <td><?= esc($usuario['id_rol']) === "1" ? "Admin" : "Cliente" ?></td>
                        <td class="d-none d-md-table-cell"><?= esc($usuario['dni_usuario']) ?></td>
                        <td class="d-none d-lg-table-cell"><?= esc($usuario['telefono_usuario']) ?></td>
                        <td class="d-none d-lg-table-cell"><?= esc($usuario['direccion_usuario']) ?></td>
                        <td class="d-none d-lg-table-cell"><?= $usuario['estado_usuario'] ? 'Activo' : 'Inactivo' ?></td>
                        <td>
                            <div class="d-flex flex-wrap justify-content-start md-justify-content-center gap-1">
                                <a href="<?= base_url('usuarios/ver/' . $usuario['id_usuario']) ?>" class="bi bi-search gap-1 edit-boton-table d-flex align-items-center">
                                    <span class="d-none d-md-inline">Ver</span>
                                </a>
                                <a href="<?= base_url('usuarios/editar/' . $usuario['id_usuario']) ?>" class="edit-boton-table bi bi-pencil-square gap-1 d-flex align-items-center">
                                    <span class="d-none d-md-inline">Editar</span>
                                </a>
                                <?php if ($usuario['id_rol'] != 1): ?>
                                    <a href="<?= base_url('usuarios/eliminar/' . $usuario['id_usuario']) ?>" class="delete-boton-table bi bi-trash3 gap-1 d-flex align-items-center" onclick="return confirm('¿Eliminar este usuario?')">
                                        <span class="d-none d-md-inline">Eliminar</span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
>>>>>>> origin/main
</div>