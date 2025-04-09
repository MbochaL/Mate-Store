<!-- 🔹 Carrusel de imágenes -->
<section class=" r">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('/assets/img/mate1.jpg') ?>" class="img-fluid w-100" alt="image mate 1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('/assets/img/mate2.jpg') ?>" class="d-block w-100" alt="image mate 2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('/assets/img/mate3.jpg') ?>" class="d-block w-100" alt="image mate 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
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