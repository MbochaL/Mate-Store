<section>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">

            <!-- Logo a la izquierda -->
            <a class="navbar-brand d-flex align-items-center" href="<?php echo base_url('inicio');?>">
                <img src="<?php echo base_url('/assets/img/logo-mate-store.png'); ?>" style="width: 50px; height: 50px;" alt="logo"/>
                <span class="ms-2 nav-title">Mate Store</span>
            </a>

            <!-- Botón toggle para móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenido del navbar -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">

                <!-- Menú central -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('inicio');?>">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('comercializacion');?>">Comercialización</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('quienes-somos');?>">¿Quienes Somos?</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('terminos-y-condiciones');?>">Términos y Condiciones</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('contacto');?>">Contacto</a></li>
                </ul>

                <!-- Botones a la derecha -->
                <ul class="navbar-nav navbar-nav-end">
                    <li class="nav-item"><a class="nav-access" href="#">Registrarse</a></li>
                    <li class="nav-item"><a class="nav-access" href="#">Iniciar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>