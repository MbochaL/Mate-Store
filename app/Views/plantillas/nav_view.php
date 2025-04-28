<style>
  /* Estilo de fondo personalizado para el navbar */
  .bg-custom {
    background-color: #59220e;
  }

  /* Estilo de la marca (texto del logo) */
  .navbar-brand-mate {
    color: #f2efbb !important;
    letter-spacing: 1px;
    font-family: 'Georgia', serif;
    transition: all 0.3s ease;
  }

  /* Estilo del botón hamburguesa (toggler) */
  .navbar-toggler-mate {
    border-color: rgba(242, 239, 187, 0.5);
    padding: 0.25rem 0.5rem;
  }

  .navbar-toggler-mate:focus {
    box-shadow: 0 0 0 0.25rem rgba(242, 239, 187, 0.25);
  }

  /* Ícono del toggler personalizado */
  .navbar-toggler-icon-mate {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(242, 239, 187, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  }

  /* Estilo base de los enlaces del navbar */
  .nav-link-mate {
    position: relative;
    transition: all 0.3s ease;
  }

  /* Línea animada bajo los enlaces */
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

  /* Hover y estado activo de los enlaces */
  .nav-link-mate:hover {
    color: #f2efbb !important;
  }

  .nav-link-mate:hover::after {
    width: 70%;
  }

  .nav-link-mate.active {
    color: #f2efbb !important;
  }

  /* Botones de acceso (registrarse / iniciar sesión) */
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

  /* Responsive: ajustes en pantallas pequeñas */
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
</style>


<section>
  <!-- Barra de navegación principal -->
  <nav class="navbar navbar-expand-lg shadow py-3 bg-custom position-relative">
    <div class="container">

      <!-- Logo + nombre de la tienda -->
      <a class="navbar-brand navbar-brand-mate d-flex align-items-center fw-bold " href="<?php echo base_url('inicio'); ?>">
        <img src="<?php echo base_url('/assets/img/logo-mate-store.png'); ?>" style="width: 50px; height: 50px;" alt="logo" />
        <span class="ms-2 footer-title">Mate Store</span>
      </a>

      <!-- Botón hamburguesa (navbar-toggler) para vista móvil -->
      <button class="navbar-toggler navbar-toggler-mate" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon navbar-toggler-icon-mate"></span>
      </button>

      <!-- Contenido colapsable del navbar -->
      <div class="collapse navbar-collapse navbar-collapse-mate justify-content-center" id="navbarNav">

        <!-- Menú de navegación principal (centrado) -->
        <ul class="navbar-nav mx-auto align-items-center align-self-center">
          <li class="nav-item">
            <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('quienes-somos'); ?>">¿Quiénes Somos?</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('terminos-y-condiciones'); ?>">Términos y Condiciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('contacto'); ?>">Contacto</a>
          </li>
        </ul>

        <!-- Botones de acción (derecha) -->
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