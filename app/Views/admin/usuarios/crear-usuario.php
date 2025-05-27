<div class="container mt-4">
    <h2>Crear Usuario</h2>

    <?php if (session('validation')): ?>
        <div class="alert alert-danger">
            <?php foreach (session('validation') as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('usuarios/guardar') ?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre_usuario" value="<?= old('nombre_usuario') ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido_usuario" value="<?= old('apellido_usuario') ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono_usuario" value="<?= old('telefono_usuario') ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email_usuario" value="<?= old('email_usuario') ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">DNI</label>
            <input type="text" class="form-control" name="dni_usuario" value="<?= old('dni_usuario') ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion_usuario" value="<?= old('direccion_usuario') ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password_usuario" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Rol</label>
            <select class="form-select" name="id_rol" required>
                <option value="">Seleccionar</option>
                <?php foreach ($roles as $rol): ?>
                    <option value="<?= $rol['id_rol'] ?>"><?= esc($rol['nombre_rol']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Estado</label>
            <select class="form-select" name="estado_usuario" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?= base_url('usuarios') ?>" class="btn btn-secondary">Volver</a>
    </form>
</div>