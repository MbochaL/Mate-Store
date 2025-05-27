<div class="container mt-4">
    <h2>Consultas Recibidas</h2>

    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Asunto</th>
                <th>Usuario Registrado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultas as $consulta): ?>
                <tr>
                    <td><?= esc($consulta['nombre_consulta']) ?></td>
                    <td><?= esc($consulta['email_consulta']) ?></td>
                    <td><?= esc($consulta['asunto']) ?></td>
                    <td>
                        <?= $consulta['nombre_usuario'] ?? 'Anónimo' ?>
                        <?= isset($consulta['apellido_usuario']) ? $consulta['apellido_usuario'] : '' ?>
                    </td>
                    <td>
                        <a href="<?= base_url('consultas/ver/' . $consulta['id_consulta']) ?>" class="edit-boton-table">Ver</a>
                        <a href="<?= base_url('consultas/eliminar/' . $consulta['id_consulta']) ?>" class="delete-boton-table" onclick="return confirm('¿Eliminar esta consulta?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>