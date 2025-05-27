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
                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Tu mensaje" style="height: 400px; resize: none;" required></textarea>
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