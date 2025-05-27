<div class="container mt-4">
    <h2>Nueva Venta</h2>

    <form action="<?= base_url('ventas/guardar') ?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="id_usuario" class="form-label">Cliente</label>
            <select class="form-select" name="id_usuario" required>
                <option value="">Seleccionar cliente</option>
                <?php foreach ($usuarios as $usuario): ?>
                    <option value="<?= $usuario['id_usuario'] ?>">
                        <?= esc($usuario['nombre_usuario'] . ' ' . $usuario['apellido_usuario']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <h5>Productos</h5>
        <div id="productos-container">
            <div class="row mb-3 producto-linea">
                <div class="col-md-4">
                    <select class="form-select" name="id_producto[]" required>
                        <option value="">Seleccionar producto</option>
                        <?php foreach ($productos as $producto): ?>
                            <option value="<?= $producto['id_producto'] ?>" data-precio="<?= $producto['precio_producto'] ?>">
                                <?= esc($producto['nombre_producto']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control" name="cantidad[]" min="1" value="1" required>
                </div>
                <div class="col-md-3">
                    <input type="number" step="0.01" class="form-control precio" name="precio[]" required>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger btn-remove">✕</button>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-secondary mb-3" id="add-producto">Agregar otro producto</button>

        <button type="submit" class="btn btn-success">Registrar Venta</button>
        <a href="<?= base_url('ventas') ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script>
    document.getElementById('add-producto').addEventListener('click', function() {
        const container = document.getElementById('productos-container');
        const row = container.querySelector('.producto-linea');
        const clone = row.cloneNode(true);
        clone.querySelectorAll('input').forEach(input => input.value = '');
        container.appendChild(clone);
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('btn-remove')) {
            const allRows = document.querySelectorAll('.producto-linea');
            if (allRows.length > 1) {
                e.target.closest('.producto-linea').remove();
            }
        }
    });

    // Autocompletar precio según selección
    document.addEventListener('change', function(e) {
        if (e.target.name === 'id_producto[]') {
            const precio = e.target.selectedOptions[0].getAttribute('data-precio');
            const precioInput = e.target.closest('.producto-linea').querySelector('.precio');
            if (precio) precioInput.value = precio;
        }
    });
</script>