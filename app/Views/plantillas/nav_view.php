<section>
  <!-- Barra de navegación principal -->
  <nav class="navbar navbar-expand-lg shadow py-3 bg-custom position-relative">
    <div class="container">

      <!-- Logo + nombre de la tienda -->
      <a class="navbar-brand navbar-brand-mate d-flex align-items-center fw-bold " href="<?php echo base_url(session('id_rol') == 1 ? 'admin_dashboard' : 'inicio'); ?>">
        <img src="<?php echo base_url('/assets/img/logo-mate-store.png'); ?>" style="width: 50px; height: 50px;" alt="logo" />
        <?php if (session('id_rol') == 1) { ?>
          <span class="ms-2 footer-title">Panel Admin</span>
        <?php } else { ?>
          <span class="ms-2 footer-title">Mate Store</span>
        <?php } ?>
      </a>

      <!-- Botón hamburguesa (navbar-toggler) para vista móvil -->
      <button class="navbar-toggler navbar-toggler-mate" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon navbar-toggler-icon-mate"></span>
      </button>

      <!-- Contenido colapsable del navbar -->
      <div class="collapse navbar-collapse navbar-collapse-mate justify-content-center" id="navbarNav">

        <?php if (session('id_rol') == 1) { ?>
          <ul class="navbar-nav mx-auto align-items-center align-self-center">
            <li class="nav-item">
              <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('productos'); ?>">productos</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('usuarios'); ?>">usuarios</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('ventas'); ?>">ventas</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('consultas'); ?>">consultas</a>
            </li>
          </ul>
        <?php } else { ?>
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
        <?php } ?>

        <!-- Menú de navegación principal (centrado) -->


        <!-- Botones de acción (derecha) -->
        <?php if (!session('isLogged')) { ?>
          <ul class="navbar-nav navbar-nav-end">
            <li class="nav-item">
              <a class="nav-access-mate" href="<?php echo base_url('register'); ?>">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-access-mate" href="<?php echo base_url('login'); ?>">Iniciar sesión</a>
            </li>
          </ul>
        <?php } else { ?>
          <ul class="navbar-nav navbar-nav-end">
            <li class="nav-item">
              <a class="nav-user-info" href="#">
                <i class="fa-solid fa-user user-icon"></i> <?php echo session("nombre_usuario"); ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-access-mate" href="<?php echo base_url('logout'); ?>">Cerrar Sesión</a>
            </li>
          </ul>
        <?php } ?>
      </div>
    </div>
  </nav>
</section>