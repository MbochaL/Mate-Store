<?php
$nombreCompleto = session()->get('nombre_usuario') . ' ' . session()->get('apellido_usuario');
?>

<div class="container mt-5">
  <div class="text-center mb-4">
    <h2 class="welcome-title">Bienvenido Administrador <span><?= esc($nombreCompleto) ?></span></h2>
    <p class="lead">Seleccioná una sección para gestionar tu tienda</p>
  </div>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

    <!-- Productos -->
    <div class="col">
      <a href="<?= base_url('productos') ?>" class="text-decoration-none">
        <div class="card h-100 shadow-sm text-center admin-card">
          <div class="card-body">
            <i class="bi bi-box-seam display-5 mb-3"></i>
            <h5 class="card-title">Productos</h5>
            <p class="card-text">Gestionar el catálogo de productos.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Categorías -->
    <div class="col">
      <a href="<?= base_url('categorias') ?>" class="text-decoration-none">
        <div class="card h-100 shadow-sm text-center admin-card">
          <div class="card-body">
            <i class="bi bi-tags display-5 mb-3"></i>
            <h5 class="card-title">Categorías</h5>
            <p class="card-text">Organizá los productos por tipo.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Usuarios -->
    <div class="col">
      <a href="<?= base_url('usuarios') ?>" class="text-decoration-none">
        <div class="card h-100 shadow-sm text-center admin-card">
          <div class="card-body">
            <i class="bi bi-people-fill display-5 mb-3"></i>
            <h5 class="card-title">Usuarios</h5>
            <p class="card-text">Ver y administrar usuarios del sistema.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Ventas -->
    <div class="col">
      <a href="<?= base_url('ventas') ?>" class="text-decoration-none">
        <div class="card h-100 shadow-sm text-center admin-card">
          <div class="card-body">
            <i class="bi bi-cart-fill display-5 mb-3"></i>
            <h5 class="card-title">Ventas</h5>
            <p class="card-text">Registrar y consultar ventas realizadas.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Facturas -->
    <div class="col">
      <a href="<?= base_url('facturas') ?>" class="text-decoration-none">
        <div class="card h-100 shadow-sm text-center admin-card">
          <div class="card-body">
            <i class="bi bi-receipt-cutoff display-5 mb-3"></i>
            <h5 class="card-title">Facturas</h5>
            <p class="card-text">Accedé al historial de facturas.</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Consultas -->
    <div class="col">
      <a href="<?= base_url('consultas') ?>" class="text-decoration-none">
        <div class="card h-100 shadow-sm text-center admin-card">
          <div class="card-body">
            <i class="bi bi-envelope-open-fill display-5 mb-3"></i>
            <h5 class="card-title">Consultas</h5>
            <p class="card-text">Revisá los mensajes recibidos por clientes.</p>
          </div>
        </div>
      </a>
    </div>

  </div>
</div>