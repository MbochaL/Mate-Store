<div class="auth-container">
  <div class="auth-card">
    <div class="auth-header">
      <a href="<?= base_url('inicio'); ?>">
        <img src="<?= base_url('/assets/img/logo-mate-store.png'); ?>" alt="Mate Store Logo" class="auth-logo">
      </a>
      <h3 class="auth-title">¡Bienvenido a Mate Store!</h3>
    </div>

    <div class="auth-body">
      <!-- Mostrar mensaje de error -->
      <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-danger">
          <?= session()->getFlashdata('mensaje') ?>
        </div>
      <?php endif; ?>

      <!-- Mostrar errores de validación -->
      <?php if (isset($validation)): ?>
        <div class="alert alert-danger">
          <?php foreach ($validation as $error): ?>
            <p><?= esc($error) ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <form action="<?= base_url('login'); ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" name="email_usuario" placeholder="nombre@ejemplo.com" required>
          <label for="email">Correo electrónico</label>
        </div>

        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="password" name="pass_usuario" placeholder="Contraseña" required>
          <label for="password">Contraseña</label>
        </div>

        <button type="submit" class="btn auth-btn w-100">Iniciar sesión</button>
      </form>

      <div class="text-center mt-4">
        <p>¿No tenés una cuenta? <a href="<?= base_url('register'); ?>" class="auth-link">Registrate</a></p>
      </div>
    </div>

    <div class="auth-footer">
      <p>
        <span class="mate-icon">
          <i class="bi bi-cup-hot-fill"></i>
        </span>
        Mate Store © 2025
      </p>
    </div>
  </div>
</div>