<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function AdminDashboard()
    {
        $session = session();

        if ($session->get('isLogged') && $session->get('id_rol')    == 2) {
            return redirect()->to('/inicio')->with('mensaje', 'Necesitás ser admin para ingresar ahi');
        }

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/admin_home');
    }
}
