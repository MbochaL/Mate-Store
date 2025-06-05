<div class="container mt-4">
    <h2>Consultas Recibidas</h2>

    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-bordered table-sm text-center align-middle">
            <thead class="table-secondary">
                <tr>
                    <th>Nombre</th>
                    <th class="d-none d-lg-table-cell">Email</th>
                    <th class="d-none d-md-table-cell">Asunto</th>
                    <th>Usuario Registrado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($consultas as $consulta): ?>
                    <tr>
                        <td><?= esc($consulta['nombre_consulta']) ?></td>
                        <td class="d-none d-lg-table-cell"><?= esc($consulta['email_consulta']) ?></td>
                        <td class="d-none d-md-table-cell"><?= esc($consulta['asunto']) ?></td>
                        <td>
                            <?= $consulta['nombre_usuario'] ?? 'Anónimo' ?>
                            <?= isset($consulta['apellido_usuario']) ? $consulta['apellido_usuario'] : '' ?>
                        </td>
                        <td>
                            <div class="d-flex flex-wrap justify-content-center gap-1">
                                <a href="<?= base_url('consultas/ver/' . $consulta['id_consulta']) ?>" class="edit-boton-table bi bi-search gap-1 d-flex align-items-center">
                                    <span class="d-none d-lg-inline">Ver</span>
                                </a>
                                <a href="<?= base_url('consultas/eliminar/' . $consulta['id_consulta']) ?>" class="delete-boton-table bi bi-trash3 gap-1 d-flex align-items-center" onclick="return confirm('¿Eliminar esta consulta?')">
                                    <span class="d-none d-lg-inline">Eliminar</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>