<div class="container mt-4">
  <h2>Consultas Recibidas</h2>

  <?php if (session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
  <?php endif; ?>

  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr class="table-secondary">
          <th>Nombre</th>
          <th>Email</th>
          <th>Asunto</th>
          <th>Usuario Registrado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($consultas as $consulta): ?>
          <tr class="align-content-center">
            <td scope="row" class="align-content-center"><?= esc($consulta['nombre_consulta']) ?></td>
            <td scope="row" class="align-content-center"><?= esc($consulta['email_consulta']) ?></td>
            <td scope="row" class="align-content-center"><?= esc($consulta['asunto']) ?></td>
            <td scope="row" class="align-content-center">
              <?= $consulta['nombre_usuario'] ?? 'Anónimo' ?>
              <?= isset($consulta['apellido_usuario']) ? $consulta['apellido_usuario'] : '' ?>
            </td>
            <td scope="row" class="align-content-center">
              <a href="<?= base_url('consultas/ver/' . $consulta['id_consulta']) ?>" class="edit-boton-table bi bi-search">
                <span class="d-none d-lg-inline"> Ver</span>
              </a>
              <a href="<?= base_url('consultas/eliminar/' . $consulta['id_consulta']) ?>" class="delete-boton-table bi bi-trash" onclick="return confirm('¿Eliminar esta consulta?')">
                <span class="d-none d-lg-inline"> Eliminar</span>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>