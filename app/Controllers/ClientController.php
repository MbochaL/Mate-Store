<?php

namespace App\Controllers;

class ClientController extends BaseController
{
  public function index(): string
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('cliente/home/carrusel')
      . view('cliente/home/destacados')
      . view('cliente/home/categorias')
      . view('/plantillas/footer_view');
  }

  public function comercializacion()
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('cliente/comercializacion')
      . view('/plantillas/footer_view');
  }

  public function contacto()
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('cliente/contacto')
      . view('/plantillas/footer_view');
  }

  public function quienesSomos()
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('cliente/quienes_somos')
      . view('/plantillas/footer_view');
  }

  public function terminosyCondiciones()
  { 
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('cliente/terminos_y_condiciones')
      . view('/plantillas/footer_view');
  }
}
