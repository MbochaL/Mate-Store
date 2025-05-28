<?php
$nombreCompleto = session()->get('nombre_usuario') . ' ' . session()->get('apellido_usuario');
?>

<div class="text-center">
  <h2 class="mt-5 welcome-title">
    Bienvenido Administrador <span><?= esc($nombreCompleto) ?></span>
  </h2>
</div>