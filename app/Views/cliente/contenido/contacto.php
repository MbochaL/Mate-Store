<style>
  /* Estilos para la página de contacto */
  .contact-page {
    color: #59220e;
    padding: 3rem 0;
    background-color: rgba(242, 239, 187, 0.1);
  }

  .page-title {
    color: #59220e;
    font-weight: 700;
    position: relative;
    display: inline-block;
    padding-bottom: 15px;
    margin-bottom: 1rem;
  }

  .page-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background-color: #f2efbb;
  }

  .contact-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(89, 34, 14, 0.1);
    overflow: hidden;
    height: 100%;
    transition: all 0.3s ease;
  }

  .contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(89, 34, 14, 0.15);
  }

  .contact-header {
    background-color: #59220e;
    color: #fff;
    padding: 1.5rem;
    position: relative;
  }

  .contact-header h3 {
    margin-bottom: 0;
    font-weight: 600;
  }

  .contact-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
    background-color: #f2efbb;
  }

  .contact-body {
    padding: 2rem;
  }

  .contact-info-item {
    display: flex;
    margin-bottom: 1.5rem;
    align-items: flex-start;
  }

  .contact-info-item:last-child {
    margin-bottom: 0;
  }

  .contact-icon {
    background-color: #f2efbb;
    color: #59220e;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    font-size: 1.2rem;
    flex-shrink: 0;
  }

  .contact-content {
    flex-grow: 1;
  }

  .contact-label {
    font-weight: 600;
    margin-bottom: 0.2rem;
    color: #59220e;
  }

  .contact-text {
    margin-bottom: 0;
    color: #59220e;
    opacity: 0.9;
  }

  .contact-link {
    color: #59220e;
    text-decoration: none;
    transition: all 0.3s ease;
    border-bottom: 1px dashed #f2efbb;
  }

  .contact-link:hover {
    color: #59220e;
    border-bottom: 1px solid #59220e;
  }

  .form-floating>label {
    color: #59220e;
    opacity: 0.7;
  }

  .form-control:focus {
    border-color: #f2efbb;
    box-shadow: 0 0 0 0.25rem rgba(242, 239, 187, 0.25);
  }

  .contact-btn {
    background-color: #59220e;
    border-color: #59220e;
    color: #fff;
    width: 100%;
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .contact-btn:hover,
  .contact-btn:focus {
    background-color: #4a1c0c;
    border-color: #4a1c0c;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(89, 34, 14, 0.2);
  }

  .social-links {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
  }

  .social-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #f2efbb;
    color: #59220e;
    transition: all 0.3s ease;
    text-decoration: none;
  }

  .social-link:hover {
    background-color: #59220e;
    color: #f2efbb;
    transform: translateY(-3px);
  }

  .map-container {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(89, 34, 14, 0.1);
    position: relative;
  }

  .map-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background-color: #59220e;
    z-index: 1;
  }

  .map-iframe {
    width: 100%;
    height: 450px;
    border: none;
  }

  .section-divider {
    height: 2px;
    background-color: rgba(242, 239, 187, 0.5);
    margin: 3rem 0;
  }

  .contact-hours {
    display: flex;
    justify-content: space-between;
    padding: 0.5rem 0;
    border-bottom: 1px dashed rgba(89, 34, 14, 0.2);
  }

  .contact-hours:last-child {
    border-bottom: none;
  }

  .day {
    font-weight: 600;
  }

  .hours {
    color: #59220e;
    opacity: 0.8;
  }
</style>

<div class="contact-page">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="page-title display-5">Contacto</h1>
      <p class="lead">Estamos aquí para ayudarte. ¡Contactanos!</p>
    </div>

    <div class="row g-4 mb-5">
      <!-- Formulario de contacto -->
      <div class="col-lg-7">
        <div class="contact-card h-100">
          <div class="contact-header">
            <h3>Envíanos un mensaje</h3>
          </div>
          <div class="contact-body">
            <form action="<?= base_url('contacto') ?>" method="post">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                    <label for="nombre">Nombre</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="nombre@ejemplo.com" required>
                    <label for="correo">Correo electrónico</label>
                  </div>
                </div>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto" required>
                <label for="asunto">Asunto</label>
              </div>

              <div class="form-floating mb-3">
                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Tu mensaje" style="height: 400px" required></textarea>
                <label for="mensaje">Mensaje</label>
              </div>

              <button type="submit" class="btn contact-btn">
                <i class="bi bi-send me-2"></i> Enviar Consulta
              </button>
            </form>

            <?php if (session()->getFlashdata('mensaje_consulta')) : ?>
              <div class="alert alert-success mt-3">
                <?= session()->getFlashdata('mensaje_consulta') ?>
              </div>
            <?php endif; ?>

            <?php if (!empty($validation)) : ?>
              <div class="alert alert-danger mt-3">
                <?= implode('<br>', $validation) ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <!-- Información de contacto -->
      <div class="col-lg-5">
        <div class="contact-card h-100">
          <div class="contact-header">
            <h3>Información de contacto</h3>
          </div>
          <div class="contact-body">
            <div class="contact-info-item">
              <div class="contact-icon">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div class="contact-content">
                <h4 class="contact-label">Dirección</h4>
                <p class="contact-text">Av. Costanera 1234, Corrientes Capital, CP 3400, Argentina</p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-icon">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div class="contact-content">
                <h4 class="contact-label">Teléfono</h4>
                <p class="contact-text">
                  <a href="tel:+5493794123456" class="contact-link">+54 (379) 4123456</a>
                </p>
                <p class="contact-text">
                  <a href="tel:+5493794567890" class="contact-link">+54 (379) 4567890</a>
                </p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-icon">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div class="contact-content">
                <h4 class="contact-label">Email</h4>
                <p class="contact-text">
                  <a href="mailto:contacto@matestore.com" class="contact-link">contacto@matestore.com</a>
                </p>
                <p class="contact-text">
                  <a href="mailto:ventas@matestore.com" class="contact-link">ventas@matestore.com</a>
                </p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-icon">
                <i class="bi bi-clock-fill"></i>
              </div>
              <div class="contact-content">
                <h4 class="contact-label">Horarios de atención</h4>
                <div class="mt-2">
                  <div class="contact-hours">
                    <span class="day">Lunes - Viernes:</span>
                    <span class="hours">9:00 - 18:00</span>
                  </div>
                  <div class="contact-hours">
                    <span class="day">Sábados:</span>
                    <span class="hours">10:00 - 14:00</span>
                  </div>
                  <div class="contact-hours">
                    <span class="day">Domingos:</span>
                    <span class="hours">Cerrado</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-4">
              <h4 class="contact-label">Seguinos en redes</h4>
              <div class="social-links">
                <a href="https://facebook.com/Mate.store" class="social-link" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://instagram.com/Mate.store" class="social-link" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://twitter.com/Mate.store" class="social-link" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="https://wa.me/5493794123456" class="social-link" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-divider"></div>

    <!-- Mapa -->
    <div class="mb-5">
      <h2 class="text-center mb-4">Encontranos aquí</h2>
      <div class="map-container">
        <!-- Reemplaza las coordenadas con la ubicación exacta de la tienda -->
        <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56511.42016498121!2d-58.85999287832031!3d-27.47000810000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca6d4c74619%3A0x4a787e7908af04e6!2sCorrientes%2C%20Capital%20Department%2C%20Corrientes%20Province!5e0!3m2!1sen!2sar!4v1650000000000!5m2!1sen!2sar" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>