<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function AdminDashboard()
    {
        return view('plantillas/sidebar_view')
            . view('admin/admin_home');
    }

    public function categorias()
    {
        return view('admin/categorias');
    }

    public function usuarios()
    {
        return view('admin/usuarios');
    }

    public function facturas()
    {
        return view('admin/facturas');
    }

    public function consultas()
    {
        return view('admin/consultas');
    }

    public function productos()
    {
        return view('admin/productos');
    }

    public function ventas()
    {
        return view('admin/ventas');
    }
}
