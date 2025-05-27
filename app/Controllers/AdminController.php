<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function AdminDashboard()
    {
        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/admin_home');
    }
}