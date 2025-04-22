<style>
  /* Estilos personalizados con los colores solicitados */
  .text-mate-primary {
    color: #59220e !important;
  }
  .text-mate-accent {
    color: #f2efbb !important;
  }
  .bg-mate-primary {
    background-color: #59220e !important;
  }
  .bg-mate-accent {
    background-color: #f2efbb !important;
  }
  .border-mate-primary {
    border-color: #59220e !important;
  }
  .border-mate-accent {
    border-color: #f2efbb !important;
  }
  .team-member {
    transition: all 0.3s ease;
  }
  .team-member:hover {
    box-shadow: 0 5px 15px rgba(89, 34, 14, 0.2);
  }
</style>

<div class="quienes-somos-page py-5">
  <div class="container">
    <!-- Encabezado con estilo mejorado -->
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h1 class="display-4 fw-bold text-mate-primary mb-3">¿Quiénes Somos?</h1>
        <div class="d-inline-block position-relative">
          <hr class="bg-mate-primary opacity-75" style="width: 150px; height: 3px;">
          <span class="position-absolute top-0 start-50 translate-middle bg-white px-3">
            <i class="bi bi-cup-hot-fill text-mate-primary"></i>
          </span>
        </div>
      </div>
    </div>

    <!-- Introducción con estilo de tarjeta -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10">
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4 p-md-5 bg-mate-accent bg-opacity-50">
            <p class="fs-5 mb-4 lh-lg text-mate-primary">
              En <strong class="text-mate-primary">Mate Store</strong> nos apasiona compartir la tradición del mate con cada rincón del país. Desde nuestros comienzos, buscamos ofrecer productos artesanales y modernos que se adapten a todos los estilos, siempre con calidad y calidez humana como pilares fundamentales.
            </p>
            <p class="fs-5 mb-0 lh-lg text-mate-primary">
              Iniciamos este camino en <strong class="text-mate-primary">2018</strong> como un pequeño proyecto familiar. Con esfuerzo, innovación y una comunidad fiel que nos acompaña, hoy seguimos creciendo para llevar el mejor mate hasta tu casa.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Título de equipo -->
    <div class="row mb-4">
      <div class="col-12 text-center">
        <h2 class="h3 text-mate-primary">Nuestro Equipo</h2>
        <p class="text-mate-primary opacity-75">Las personas que hacen posible Mate Store</p>
      </div>
    </div>

    <!-- Mariano Gómez -->
    <div class="row align-items-center mb-5 py-4 team-member rounded">
      <div class="col-md-5 order-md-2 text-center mb-4 mb-md-0">
        <div class="position-relative d-inline-block">
          <img src="<?php echo base_url('/assets/img/rostro1.jpg'); ?>" alt="Mariano Gómez" class="img-fluid rounded-circle border border-3 border-mate-accent p-1" style="width: 200px; height: 200px; object-fit: cover;">
          <div class="position-absolute bottom-0 end-0">
            <span class="badge rounded-pill bg-mate-primary p-2">
              <i class="bi bi-star-fill"></i> Fundador
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-7 order-md-1">
        <h3 class="h4 text-mate-primary mb-2">Mariano Gómez</h3>
        <p class="text-mate-primary opacity-75 mb-3 fw-bold">Fundador y Director General</p>
        <div class="border-start border-mate-primary border-3 ps-3">
          <p class="fs-5 lh-lg text-mate-primary">Apasionado por la cultura matera, Mariano fue quien dio el primer paso con Mate Store. Su visión emprendedora y compromiso con la calidad han sido claves en el crecimiento de la empresa.</p>
        </div>
      </div>
    </div>

    <!-- Lucía Fernández -->
    <div class="row align-items-center mb-5 py-4 team-member bg-mate-accent bg-opacity-25 rounded">
      <div class="col-md-5 text-center mb-4 mb-md-0">
        <div class="position-relative d-inline-block">
          <img src="<?php echo base_url('/assets/img/rostro2.jpg'); ?>" alt="Lucía Fernández" class="img-fluid rounded-circle border border-3 border-mate-primary p-1" style="width: 200px; height: 200px; object-fit: cover;">
          <div class="position-absolute bottom-0 end-0">
            <span class="badge rounded-pill bg-mate-primary p-2">
              <i class="bi bi-graph-up"></i> Marketing
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <h3 class="h4 text-mate-primary mb-2">Lucía Fernández</h3>
        <p class="text-mate-primary opacity-75 mb-3 fw-bold">Gerente de Marketing</p>
        <div class="border-start border-mate-primary border-3 ps-3">
          <p class="fs-5 lh-lg text-mate-primary">Creativa, dinámica y con gran experiencia en e-commerce, Lucía lidera nuestras campañas de marketing con una mirada fresca, estratégica y cercana a nuestra comunidad.</p>
        </div>
      </div>
    </div>

    <!-- Carlos Méndez -->
    <div class="row align-items-center mb-5 py-4 team-member rounded">
      <div class="col-md-5 order-md-2 text-center mb-4 mb-md-0">
        <div class="position-relative d-inline-block">
          <img src="<?php echo base_url('/assets/img/rostro3.jpg'); ?>" alt="Carlos Méndez" class="img-fluid rounded-circle border border-3 border-mate-accent p-1" style="width: 200px; height: 200px; object-fit: cover;">
          <div class="position-absolute bottom-0 end-0">
            <span class="badge rounded-pill bg-mate-primary p-2">
              <i class="bi bi-headset"></i> Soporte
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-7 order-md-1">
        <h3 class="h4 text-mate-primary mb-2">Carlos Méndez</h3>
        <p class="text-mate-primary opacity-75 mb-3 fw-bold">Atención al Cliente</p>
        <div class="border-start border-mate-primary border-3 ps-3">
          <p class="fs-5 lh-lg text-mate-primary">Carlos es quien escucha y acompaña a nuestros clientes en todo momento. Su calidez y dedicación garantizan una experiencia positiva en cada compra.</p>
        </div>
      </div>
    </div>

    <!-- Mensaje final con estilo de tarjeta -->
    <div class="row justify-content-center mt-5">
      <div class="col-lg-10">
        <div class="card border-0 bg-mate-primary text-white shadow">
          <div class="card-body p-4 text-center">
            <i class="bi bi-cup-hot-fill fs-1 mb-3 text-mate-accent"></i>
            <p class="fs-5 mb-0">
              Nuestro equipo está comprometido con brindarte la mejor atención y calidad. ¡Gracias por ser parte de <strong>Mate Store</strong>!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>