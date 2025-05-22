<style>
    .sidebar {
        width: 220px;
        background: #59220e;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        padding-top: 60px;
    }

    .dashboard-brand {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 2px;
    }

    .sidebar-links {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0px 10px;
        gap: 2px;
    }

    .sidebar-links  a {
        background-color: #f2efbb;
        padding: 10px 0px;
        margin: 0px 10px;
        color: #59220e;
        width: 100%;
        text-align: center;
        margin-top: 4px;
        text-decoration: none;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li a {
        display: block;
        padding: 10px 20px;
        color: #59220e;
        font-family: 'Georgia', serif;
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
    }
</style>

<aside class="sidebar">
    <a class="dashboard-brand" href="<?php echo base_url('inicio'); ?>">
        <img src="<?php echo base_url('/assets/img/logo-mate-store.png'); ?>" style="width: 50px; height: 50px;" alt="logo" />
        <span class="">Mate Store</span>
    </a>

    <div class="sidebar-links">
        <a href="/admin/usuarios">Usuarios</a>
        <a href="/admin/usuarios">Categorias</a>
        <a href="/admin/usuarios">Productos</a>
        <a href="/admin/usuarios">Ventas</a>
        <a href="/admin/usuarios">Facturas</a>
        <a href="/admin/usuarios">Consultas</a>
    </div>

</aside>