<div class="container mt-4">
    <h2>Categorías</h2>

    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
    <?php endif; ?>

    <a href="<?= base_url('categorias/crear') ?>" class="add-boton-table">Nueva Categoría</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria): ?>
                <tr>
                    <td><?= $categoria['id_categoria'] ?></td>
                    <td><?= esc($categoria['nombre_categoria']) ?></td>
                    <td>
                        <a href="<?= base_url('categorias/editar/' . $categoria['id_categoria']) ?>" class="bi bi-pencil-square gap-1 edit-boton-table">Editar</a>
                        <a href="<?= base_url('categorias/eliminar/' . $categoria['id_categoria']) ?>" class="bi bi-trash3 delete-boton-table" onclick="return confirm('¿Eliminar esta categoría?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>