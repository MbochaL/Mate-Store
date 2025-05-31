<style>

</style>

<!-- Pie de página -->
<footer class="footer-mate pt-5 pb-3">
  <div class="container">
    <div class="footer-content">
      <!-- Logo o nombre -->
      <div>
        <a class="d-flex align-items-center mb-2" style="text-decoration: none;" href="<?php echo base_url('inicio'); ?>">
          <img src="<?php echo base_url('/assets/img/logo-mate-store.png'); ?>" class="footer-logo" alt="logo" />
          <span class="ms-2 footer-title">Mate Store</span>
        </a>
        <p class="mx-4">
          La tradición hecha diseño. Productos únicos para compartir buenos momentos.
        </p>
      </div>

      <!-- Navegación -->
      <div class="col-md-3 mb-4 footer-box-links">
        <h6 class="footer-heading">NAVEGACIÓN</h6>
        <ul class="list-unstyled">
          <li><a href="<?= base_url('inicio'); ?>" class="footer-link">Inicio</a></li>
          <li><a href="<?= base_url('contacto'); ?>" class="footer-link">Contacto</a></li>
          <li><a href="<?= base_url('comercializacion'); ?>" class="footer-link">Comercialización</a></li>
          <li><a href="<?= base_url('quienes-somos'); ?>" class="footer-link">¿Quiénes Somos?</a></li>
          <li><a href="<?= base_url('terminos-y-condiciones'); ?>" class="footer-link">Términos y Condiciones</a></li>
        </ul>
      </div>

      <!-- Contacto -->
      <div class="col-md-3 mb-4">
        <h6 class="footer-heading">CONTACTO</h6>
        <p class="d-flex align-items-center gap-2">
          <i class="bi bi-envelope-fill" style="color: #f2efbb;"></i>
          <a href="mailto:contacto@matestore.com" class="footer-link">contacto@matestore.com</a>
        </p>
        <p class="d-flex align-items-center gap-2">
          <i class="bi bi-telephone-fill" style="color: #f2efbb;"></i>
          <a href="tel:+5491234567890" class="footer-link">+54.379.415.342647</a>
        </p>
        <p class="d-flex align-items-center gap-2">
          <i class="bi bi-geo-alt-fill" style="color: #f2efbb;"></i>
          <span class="footer-link">Corrientes,Argentina</span>
        </p>
      </div>

      <!-- Redes sociales -->
      <div class="col-md-3 mb-4">
        <h6 class="footer-heading">SEGUINOS</h6>
        <div class="footer-box-links">
          <a href="https://facebook.com/Mate.store" class="footer-social-link text-center" target="_blank">
            <span class="ml-2 footer-social-icon">
              <i class="fab fa-facebook-f"></i>
            </span>
            Facebook
          </a>
          <a href="https://instagram.com/Mate.store" class="footer-social-link" target="_blank">
            <span class="footer-social-icon">
              <i class="fab fa-instagram"></i>
            </span>
            Instagram
          </a>
          <a href="https://twitter.com/Mate.store" class="footer-social-link" target="_blank">
            <span class="footer-social-icon">
              <i class="fab fa-twitter"></i>
            </span>
            Twitter
          </a>
        </div>
      </div>
    </div>

    <!-- Derechos de autor -->
    <div class="text-center mt-4 pt-3 footer-bottom">
      <p class="mb-0">© 2025 Mate Store. Todos los derechos reservados.</p>
    </div>
  </div>
</footer>

</body>

</html>