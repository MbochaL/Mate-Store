<style>
    /* Estilos para el formulario de login */
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
        max-width: 450px;
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
</style>

<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <img src="<?php echo base_url('/assets/img/logo-mate-store.png'); ?>" alt="Mate Store Logo" class="auth-logo">
            <h1 class="auth-title">¡Bienvenido de nuevo!</h1>
            <p class="auth-subtitle">Iniciá sesión para acceder a tu cuenta</p>
        </div>

        <div class="auth-body">
            <form action="<?php echo base_url('login/process'); ?>" method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required>
                    <label for="email">Correo electrónico</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                    <label for="password">Contraseña</label>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember" style="color: #59220e;">
                            Recordarme
                        </label>
                    </div>
                    <a href="#" class="auth-link">¿Olvidaste tu contraseña?</a>
                </div>

                <button type="submit" class="btn auth-btn w-100">Iniciar sesión</button>
            </form>

            <div class="text-center mt-4">
                <p>¿No tenés una cuenta? <a href="<?php echo base_url('registro'); ?>" class="auth-link">Registrate</a></p>
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