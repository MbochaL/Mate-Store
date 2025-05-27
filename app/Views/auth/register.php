<div class="auth-container">
  <div class="auth-card">
    <div class="auth-header">
      <a href="<?= base_url('inicio') ?>">
        <img src="<?= base_url('/assets/img/logo-mate-store.png') ?>" alt="Mate Store Logo" class="auth-logo">
      </a>
      <h1 class="auth-title">Creá tu cuenta</h1>
      <p class="auth-subtitle">Registrate para disfrutar de todos nuestros productos</p>
    </div>

    <div class="auth-body">
      <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-danger">
          <?= session()->getFlashdata('mensaje') ?>
        </div>
      <?php endif; ?>

      <?php if (session('validation')): ?>
        <div class="alert alert-danger">
          <?php foreach (session('validation') as $error): ?>
            <p><?= esc($error) ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <form id="registerForm" action="<?= base_url('register') ?>" method="post">
        <?= csrf_field() ?>

        <div class="row g-3">
          <div class="col-md-6">
            <div class="form-floating">
              <input type="text" class="form-control" name="nombre_usuario" placeholder="Tu nombre" required value="<?= old('nombre_usuario') ?>">
              <label for="nombre_usuario">Nombre</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating">
              <input type="text" class="form-control" name="apellido_usuario" placeholder="Tu apellido" required value="<?= old('apellido_usuario') ?>">
              <label for="apellido_usuario">Apellido</label>
            </div>
          </div>
        </div>

        <div class="row g-3 mt-2">
          <div class="col-md-6">
            <div class="form-floating">
              <input type="text" class="form-control" name="telefono_usuario" placeholder="Telefono. Ej: 3794567890" required value="<?= old('telefono_usuario') ?>">
              <label for="telefono_usuario">Teléfono</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating">
              <input type="text" class="form-control" name="dni_usuario" placeholder="Documento Nacional de Identidad" required value="<?= old('dni_usuario') ?>">
              <label for="dni_usuario">DNI</label>
            </div>
          </div>
        </div>

        <div class="form-floating my-3">
          <input type="text" class="form-control" name="direccion_usuario" placeholder="Dirección del usuario" required value="<?= old('direccion_usuario') ?>">
          <label for="direccion_usuario">Dirección</label>
        </div>

        <div class="form-floating my-3">
          <input type="email" class="form-control" name="email_usuario" placeholder="Correo electrónico" required value="<?= old('email_usuario') ?>">
          <label for="email_usuario">Correo electrónico</label>
        </div>

        <div class="form-floating mb-2">
          <input type="password" class="form-control" name="pass_usuario" placeholder="Contraseña" required>
          <label for="pass_usuario">Contraseña</label>
        </div>

        <button type="submit" class="btn auth-btn w-100">Crear cuenta</button>
      </form>

      <div class="text-center mt-4">
        <p>¿Ya tenés una cuenta? <a href="<?= base_url('login') ?>" class="auth-link">Iniciá sesión</a></p>
      </div>
    </div>

    <div class="auth-footer">
      <p><span class="mate-icon"><i class="bi bi-cup-hot-fill"></i></span> Mate Store © 2025</p>
    </div>
  </div>
</div>