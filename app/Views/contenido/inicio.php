<!-- 🔹 Carrusel de imágenes -->
<section class="container mt-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('/assets/img/bandas-elasticas.jpg') ?>" class="d-block w-100" alt="bandas elasticas">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('/assets/img/barras-paralelas-altas.jpg') ?>" class="d-block w-100" alt="barras paralelas altas">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('/assets/img/barras-paralelas-bajas.jpg') ?>" class="d-block w-100" alt="barras paralelas bajas">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<!-- Bootstrap JS desde CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- 🔹 Nueva sección con párrafos -->
<section class="container mt-5">
    <p class="fw-bold fst-italic text-uppercase text-center fs-4">Bienvenido a Mi Sitio Web</p>
    <p class="mt-3 mb-4">Este es un sitio de prueba creado con Bootstrap. Aquí podrás ver cómo funcionan las utilidades de diseño, espaciado y tipografía.</p>
    <p class="mt-3 mb-4">Bootstrap nos permite crear diseños responsivos de manera rápida y sencilla, adaptándose a cualquier dispositivo.</p>
    <p class="mt-3 mb-4">El framework ofrece múltiples herramientas para dar formato a los textos y estructurar el contenido sin necesidad de escribir CSS manualmente.</p>
</section>