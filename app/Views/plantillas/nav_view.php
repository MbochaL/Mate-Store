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
              <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('productos'); ?>">Productos</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('usuarios'); ?>">Usuarios</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('ventas'); ?>">Ventas</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('consultas'); ?>">Consultas</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link nav-link-mate text-white fw-medium hidden md:block" href="<?php echo base_url('facturas'); ?>">Facturas</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('categorias'); ?>">Categorias</a>
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
            <!-- <li class="nav-item text-center">
              <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('terminos-y-condiciones'); ?>">Términos y Condiciones</a>
            </li> -->
            <li class="nav-item text-center">
              <!-- <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('catalogo'); ?>">Productos</a> -->
              <div class="dropdown">
                <a class="nav-link nav-link-mate text-white fw-medium" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Productos
                </a>
                <ul class="dropdown-menu border border-dark">
                  <li><a class="dropdown-item text-dark fw-medium" href="<?= base_url('catalogo/categoria/Bombilla'); ?>">Bombillas</a></li>
                  <li><a class="dropdown-item text-dark fw-medium" href="<?= base_url('catalogo/categoria/Mate'); ?>">Mates</a></li>
                  <li><a class="dropdown-item text-dark fw-medium" href="<?= base_url('catalogo/categoria/Termo'); ?>">Termos</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-mate text-white fw-medium" href="<?php echo base_url('contacto'); ?>">Contacto</a>
            </li>
          </ul>
        <?php } ?>

        <!-- Menú de navegación principal (centrado) -->


        <!-- Botones de acción (derecha) -->
        <?php if (!session('isLogged')): ?>
          <!-- Menú si el usuario no está logueado -->
          <ul class="navbar-nav navbar-nav-end align-items-center">
            <li class="nav-item">
              <a class="nav-access-mate" href="<?= base_url('register'); ?>">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-access-mate" href="<?= base_url('login'); ?>">Iniciar sesión</a>
            </li>
          </ul>
        <?php else: ?>
          <!-- Menú si el usuario está logueado -->
          <ul class="navbar-nav navbar-nav-end align-items-center">
            <div class="d-flex align-items-center justify-content-center gap-1 gap-lg-0">
              <li class="nav-item">
                <a class="nav-user-info" href="#">
                  <i class="fa-solid fa-user user-icon d-xl-inline d-lg-none"></i> <span><?= session("nombre_usuario"); ?></span>
                </a>
              </li>

              <?php
              switch (session('id_rol')) {
                case 1: // Administrador
              ?>
                <?php
                  break;

                case 2: // Cliente
                ?>
                  <li class="nav-item">
                    <a class="nav-access-mate bi bi-cart4" href="<?= base_url('carrito'); ?>"></a>
                  </li>
              <?php
                  break;
              }
              ?>
            </div>

            <li class="nav-item">
              <a class="nav-access-mate" href="<?= base_url('logout'); ?>">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <span class="text-responsive d-lg-none d-xl-inline">Cerrar Sesión</span>
              </a>
            </li>
          </ul>
        <?php endif; ?>

      </div>
    </div>
  </nav>
</section>