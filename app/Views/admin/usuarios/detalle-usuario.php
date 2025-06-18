<div class="container mt-4">
    <h2>Detalle del Usuario</h2>

    <div class="row">
        <div class="col-md-8">
            <ul class="list-group">
                <li class="list-group-item"><strong>Nombre:</strong> <?= esc($usuario['nombre_usuario']) ?></li>
                <li class="list-group-item"><strong>Apellido:</strong> <?= esc($usuario['apellido_usuario']) ?></li>
                <li class="list-group-item"><strong>Email:</strong> <?= esc($usuario['email_usuario']) ?></li>
                <li class="list-group-item"><strong>DNI:</strong> <?= esc($usuario['dni_usuario']) ?></li>
                <li class="list-group-item"><strong>Teléfono:</strong> <?= esc($usuario['telefono_usuario']) ?></li>
                <li class="list-group-item"><strong>Dirección:</strong> <?= esc($usuario['direccion_usuario']) ?></li>
                <li class="list-group-item"><strong>Rol:</strong> <?= esc($usuario['nombre_rol']) ?></li>
                <li class="list-group-item"><strong>Estado:</strong> <?= $usuario['estado_usuario'] ? 'Activo' : 'Inactivo' ?></li>
            </ul>

            <a href="<?= base_url('usuarios') ?>" class="edit-boton-table">Volver al listado</a>
        </div>
    </div>
</div>