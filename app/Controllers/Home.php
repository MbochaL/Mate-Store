<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index(): string
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('cliente/contenido/inicio')
      . view('cliente/contenido/home/vendidos')
      . view('cliente/contenido/home/categorias')
      . view('/plantillas/footer_view');
  }

  public function comercializacion()
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('cliente/contenido/comercializacion')
      . view('/plantillas/footer_view');
  }

  public function contacto()
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('cliente/contenido/contacto')
      . view('/plantillas/footer_view');
  }

  public function quienesSomos()
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('cliente/contenido/quienes_somos')
      . view('/plantillas/footer_view');
  }

  public function terminosyCondiciones()
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('cliente/contenido/terminos_y_condiciones')
      . view('/plantillas/footer_view');
  }
}
