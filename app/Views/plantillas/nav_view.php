<style>
  /* Estilos personalizados para la barra de navegación */
  .navbar-mate {
    background-color: #59220e;
    padding: 0.75rem 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: relative;
  }

  .navbar-mate::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: #f2efbb;
  }

  .navbar-brand-mate {
    display: flex;
    align-items: center;
    color: #f2efbb !important;
    font-weight: bold;
    letter-spacing: 1px;
    font-family: 'Georgia', serif;
    transition: all 0.3s ease;
  }

  .nav-title {
    font-size: 1.4rem;
    margin-left: 10px;
  }

  .navbar-toggler-mate {
    border-color: rgba(242, 239, 187, 0.5);
    padding: 0.25rem 0.5rem;
  }

  .navbar-toggler-mate:focus {
    box-shadow: 0 0 0 0.25rem rgba(242, 239, 187, 0.25);
  }

  .navbar-toggler-icon-mate {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(242, 239, 187, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  }

  .nav-link-mate {
    color: #fff !important;
    font-weight: 500;
    padding: 0.5rem 1rem !important;
    margin: 0 0.2rem;
    position: relative;
    transition: all 0.3s ease;
  }

  .nav-link-mate::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: #f2efbb;
    transition: all 0.3s ease;
    transform: translateX(-50%);
  }

  .nav-link-mate:hover {
    color: #f2efbb !important;
  }

  .nav-link-mate:hover::after {
    width: 70%;
  }

  .nav-link-mate.active {
    color: #f2efbb !important;
  }

  .nav-access-mate {
    color: #59220e !important;
    background-color: #f2efbb;
    border-radius: 50px;
    padding: 0.5rem 1.25rem !important;
    margin-left: 0.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
  }

  .nav-access-mate:hover {
    background-color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  /* Ajustes responsive */
  @media (max-width: 991.98px) {
    .navbar-collapse-mate {
      background-color: #59220e;
      padding: 1rem;
      border-radius: 0.5rem;
      margin-top: 0.5rem;
      border: 1px solid rgba(242, 239, 187, 0.2);
    }

    .nav-link-mate {
      padding: 0.75rem 1rem !important;
      border-radius: 0.25rem;
    }

    .nav-link-mate:hover {
      background-color: rgba(242, 239, 187, 0.1);
    }

    .nav-link-mate::after {
      display: none;
    }

    .navbar-nav-end {
      margin-top: 1rem;
      padding-top: 1rem;
      border-top: 1px solid rgba(242, 239, 187, 0.2);
    }

    .nav-access-mate {
      display: block;
      text-align: center;
      margin: 0.5rem 0;
    }
  }

  .mate-icon-nav {
    display: inline-block;
    margin-right: 5px;
    transform: rotate(-15deg);
  }
</style>

<section>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-mate">
    <div class="container">
      <!-- Logo a la izquierda -->
      <a class="navbar-brand navbar-brand-mate" href="<?php echo base_url('inicio'); ?>">
        <img src="<?php echo base_url('/assets/img/logo-mate-store.png'); ?>" style="width: 50px; height: 50px;" alt="logo" />
        <span class="ms-2 footer-title">Mate Store</span>
      </a>

      <!-- Botón toggle para móviles -->
      <button class="navbar-toggler navbar-toggler-mate" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon navbar-toggler-icon-mate"></span>
      </button>

      <!-- Contenido del navbar -->
      <div class="collapse navbar-collapse navbar-collapse-mate justify-content-between" id="navbarNav">
        <!-- Menú central -->
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-mate" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-mate" href="<?php echo base_url('quienes-somos'); ?>">¿Quiénes Somos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-mate" href="<?php echo base_url('terminos-y-condiciones'); ?>">Términos y Condiciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-mate" href="<?php echo base_url('contacto'); ?>">Contacto</a>
          </li>
        </ul>

        <!-- Botones a la derecha -->
        <ul class="navbar-nav navbar-nav-end">
          <li class="nav-item">
            <a class="nav-access-mate" href="<?php echo base_url('register'); ?>">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-access-mate" href="<?php echo base_url('login'); ?>">Iniciar sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>