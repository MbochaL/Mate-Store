<style>
  /* Estilos para el formulario de registro */
  .auth-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem 1rem;
    background-color: rgba(242, 239, 187, 0.1);
  }

  .auth-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 25px rgba(89, 34, 14, 0.15);
    overflow: hidden;
    width: 100%;
    max-width: 500px;
    position: relative;
  }

  .auth-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background-color: #59220e;
  }

  .auth-header {
    background-color: #f2efbb;
    padding: 2rem;
    text-align: center;
    position: relative;
  }

  .auth-logo {
    width: 70px;
    height: 70px;
    object-fit: contain;
    margin-bottom: 1rem;
  }

  .auth-title {
    color: #59220e;
    font-weight: 700;
    margin-bottom: 0.5rem;
  }

  .auth-subtitle {
    color: #59220e;
    opacity: 0.8;
  }

  .auth-body {
    padding: 2rem;
  }

  .form-floating>label {
    color: #59220e;
    opacity: 0.7;
  }

  .form-control:focus {
    border-color: #f2efbb;
    box-shadow: 0 0 0 0.25rem rgba(242, 239, 187, 0.25);
  }

  .auth-btn {
    background-color: #59220e;
    border-color: #59220e;
    color: #fff;
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .auth-btn:hover,
  .auth-btn:focus {
    background-color: #4a1c0c;
    border-color: #4a1c0c;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(89, 34, 14, 0.2);
  }

  .auth-link {
    color: #59220e;
    text-decoration: none;
    border-bottom: 1px dashed #f2efbb;
    transition: all 0.3s ease;
  }

  .auth-link:hover {
    color: #4a1c0c;
    border-bottom: 1px solid #f2efbb;
  }

  .auth-divider {
    display: flex;
    align-items: center;
    margin: 1.5rem 0;
  }

  .auth-divider::before,
  .auth-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background-color: rgba(89, 34, 14, 0.2);
  }

  .auth-divider-text {
    padding: 0 1rem;
    color: #59220e;
    opacity: 0.7;
  }

  .social-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    border: 1px solid rgba(89, 34, 14, 0.2);
    color: #59220e;
    border-radius: 5px;
    padding: 0.5rem 1rem;
    font-weight: 500;
    transition: all 0.3s ease;
    text-decoration: none;
  }

  .social-btn:hover {
    background-color: #f2efbb;
    border-color: #f2efbb;
    transform: translateY(-2px);
  }

  .social-icon {
    margin-right: 0.5rem;
    font-size: 1.2rem;
  }

  .mate-icon {
    display: inline-block;
    transform: rotate(-15deg);
  }

  .auth-footer {
    text-align: center;
    padding: 1rem 2rem 2rem;
    color: #59220e;
    opacity: 0.7;
  }

  .form-check-input:checked {
    background-color: #59220e;
    border-color: #59220e;
  }

  .password-strength {
    height: 5px;
    border-radius: 5px;
    margin-top: 0.5rem;
    background-color: #e9ecef;
    overflow: hidden;
  }

  .password-strength-meter {
    height: 100%;
    width: 0;
    transition: width 0.3s ease;
  }

  .strength-weak {
    width: 33%;
    background-color: #dc3545;
  }

  .strength-medium {
    width: 66%;
    background-color: #ffc107;
  }

  .strength-strong {
    width: 100%;
    background-color: #198754;
  }
</style>

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