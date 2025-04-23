<style>
    /* Estilos personalizados para el footer */
    .footer-mate {
        background-color: #59220e;
        color: #fff;
        position: relative;
    }

    .footer-mate::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background-color: #f2efbb;
    }

    .footer-title {
        color: #f2efbb;
        font-family: "Gravitas One", cursive;
        font-size: 20px;
        text-decoration: none;
        font-weight: 700;
    }

    .footer-heading {
        color: #f2efbb;
        font-weight: 600;
        margin-bottom: 1.2rem;
        position: relative;
        display: inline-block;
    }

    .footer-heading::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 40px;
        height: 2px;
        background-color: #f2efbb;
    }

    .footer-link {
        color: #fff !important;
        text-decoration: none !important;
        transition: all 0.3s ease;
        display: inline-block;
        padding: 3px 0;
    }

    .footer-link:hover {
        color: #f2efbb !important;
        transform: translateX(5px);
    }

    .footer-social-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-decoration: none;
        margin-right: 15px;
        margin-bottom: 10px;
        transition: all 0.3s ease;
    }

    .footer-social-link:hover {
        color: #f2efbb;
        text-decoration: none;
    }

    .footer-social-icon {
        display: flex;
        align-items: center;
        justify-content: end;
        width: 32px;
        height: 32px;
        transition: all 0.3s ease;
    }

    .footer-bottom {
        border-top: 1px solid rgba(242, 239, 187, 0.3);
    }

    .footer-logo {
        font-family: 'Georgia', serif;
        color: #f2efbb;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .mate-icon {
        display: inline-block;
        margin-right: 5px;
        transform: rotate(-15deg);
    }
</style>

<!-- Pie de página -->
<footer class="footer-mate pt-5 pb-3">
    <div class="container">
        <div class="row text-center text-md-start">
            <!-- Logo o nombre -->
            <div class="col-md-3 mb-4">
                <a class="d-flex align-items-center" href="<?php echo base_url('inicio'); ?>">
                    <img src="<?php echo base_url('/assets/img/logo-mate-store.png'); ?>" style="width: 50px; height: 50px;" alt="logo" />
                    <span class="ms-2 footer-title" style="text-decoration: none;">Mate Store</span>
                </a>
                <p>La tradición hecha diseño. Productos únicos para compartir buenos momentos.</p>
            </div>

            <!-- Navegación -->
            <div class="col-md-3 mb-4">
                <h6 class="footer-heading">NAVEGACIÓN</h6>
                <ul class="list-unstyled">
                    <li><a href="<?= base_url('inicio'); ?>" class="footer-link">Inicio</a></li>
                    <li><a href="<?= base_url('comercializacion'); ?>" class="footer-link">Comercialización</a></li>
                    <li><a href="<?= base_url('quienes-somos'); ?>" class="footer-link">¿Quiénes Somos?</a></li>
                    <li><a href="<?= base_url('terminos-y-condiciones'); ?>" class="footer-link">Términos y Condiciones</a></li>
                    <li><a href="<?= base_url('contacto'); ?>" class="footer-link">Contacto</a></li>
                </ul>
            </div>

            <!-- Contacto -->
            <div class="col-md-3 mb-4">
                <h6 class="footer-heading">CONTACTO</h6>
                <p>
                    <i class="bi bi-envelope-fill me-2" style="color: #f2efbb;"></i>
                    <a href="mailto:contacto@matestore.com" class="footer-link">contacto@matestore.com</a>
                </p>
                <p>
                    <i class="bi bi-telephone-fill me-2" style="color: #f2efbb;"></i>
                    <a href="tel:+5491234567890" class="footer-link">+54 9 1234 567890</a>
                </p>
                <p>
                    <i class="bi bi-geo-alt-fill me-2" style="color: #f2efbb;"></i>
                    Corrientes, Argentina
                </p>
            </div>

            <!-- Redes sociales -->
            <div class="col-md-3 mb-4">
                <h6 class="footer-heading">SEGUINOS</h6>
                <div class="d-flex flex-wrap">
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

    <!-- Bootstrap JS desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</footer>