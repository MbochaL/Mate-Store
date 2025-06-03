<div class="container mt-4">
    <h2>Nueva Categoría</h2>

    <?php if ($validation = session()->getFlashdata('validation')): ?>
        <div class="alert alert-danger"><?= implode('<br>', $validation) ?></div>
    <?php endif; ?>

    <form action="<?= base_url('categorias/guardar') ?>" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="nombre_categoria" class="form-label">Nombre de la categoría</label>
            <input type="text" name="nombre_categoria" class="form-control" value="<?= old('nombre_categoria') ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?= base_url('categorias') ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>