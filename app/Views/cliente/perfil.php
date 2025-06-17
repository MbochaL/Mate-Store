<div class="container py-5">
    <div class="text-center mb-4">
        <h1>Mi perfil</h1>
        <p>Aquí puedes consultar tus datos</p>
    </div>

    <div class="card p-4 shadow-sm">
        <ul class="list-group mb-4">
            <li class="list-group-item"><strong>Nombre:</strong> <?= esc($usuario['nombre_usuario']) ?> <?= esc($usuario['apellido_usuario']) ?> </li>
            <li class="list-group-item"><strong>Email:</strong> <?= esc($usuario['email_usuario']) ?> </li>
            <li class="list-group-item"><strong>Teléfono:</strong> <?= esc($usuario['telefono_usuario']) ?> </li>
            <li class="list-group-item"><strong>DNI:</strong> <?= esc($usuario['dni_usuario']) ?> </li>
            <li class="list-group-item"><strong>Dirección:</strong> <?= esc($usuario['direccion_usuario']) ?> </li>
            <li class="list-group-item"><strong>Rol:</strong> <?= $usuario['id_rol'] == 1 ? 'Usuario' : 'Administrador' ?> </li>
        </ul>

        <a href="<?= base_url('usuarios/editar/' . $usuario['id_usuario']) ?>" class="btn btn-primary mb-2">
            <i class="bi bi-pencil-fill me-2"></i> Editar perfil
        </a>
    </div>
</div>