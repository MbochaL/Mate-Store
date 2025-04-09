<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('plantillas/header_view').view('plantillas/nav_view').view('contenido/inicio').view('plantillas/footer_view');
    }
}
