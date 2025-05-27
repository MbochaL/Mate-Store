<div class="container mt-4">
    <h2>Consulta de <?= esc($consulta['nombre_consulta']) ?></h2>

    <p><strong>Email:</strong> <?= esc($consulta['email_consulta']) ?></p>
    <p><strong>Asunto:</strong> <?= esc($consulta['asunto']) ?></p>
    <p><strong>Mensaje:</strong></p>
    <div class="border p-3 mb-4"><?= esc($consulta['mensaje_consulta']) ?></div>

    <p><strong>Usuario Registrado:</strong>
        <?= isset($consulta['nombre_usuario']) ? esc($consulta['nombre_usuario'] . ' ' . $consulta['apellido_usuario']) : 'No' ?>
    </p>

    <a href="<?= base_url('consultas') ?>" class="btn btn-secondary">Volver</a>
</div>