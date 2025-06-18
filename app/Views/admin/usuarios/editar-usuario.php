<div class="container mt-4 mb-5">
    <h2>Editar Usuario</h2>

    <?php if (session('validation')): ?>
        <div class="alert alert-danger">
            <?php foreach (session('validation') as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('usuarios/actualizar/' . $usuario['id_usuario']) ?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre_usuario" value="<?= esc($usuario['nombre_usuario']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido_usuario" value="<?= esc($usuario['apellido_usuario']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono_usuario" value="<?= esc($usuario['telefono_usuario']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email_usuario" value="<?= esc($usuario['email_usuario']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">DNI</label>
            <input type="text" class="form-control" name="dni_usuario" value="<?= esc($usuario['dni_usuario']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion_usuario" value="<?= esc($usuario['direccion_usuario']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nueva Contraseña <small>(dejar en blanco si no se cambia)</small></label>
            <input type="password" class="form-control" name="password_usuario">
        </div>

        <div class="mb-3">
            <label class="form-label">Rol</label>
            <select class="form-select" name="id_rol" required>
                <?php foreach ($roles as $rol): ?>
                    <option value="<?= $rol['id_rol'] ?>" <?= $usuario['id_rol'] == $rol['id_rol'] ? 'selected' : '' ?>>
                        <?= esc($rol['nombre_rol']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Estado</label>
            <select class="form-select" name="estado_usuario" required>
                <option value="1" <?= $usuario['estado_usuario'] == 1 ? 'selected' : '' ?>>Activo</option>
                <option value="0" <?= $usuario['estado_usuario'] == 0 ? 'selected' : '' ?>>Inactivo</option>
            </select>
        </div>

        <button type="submit" class="add-boton-table">Actualizar</button>
        <a href="<?= base_url('usuarios') ?>" class="edit-boton-table">Volver</a>
    </form>
</div>