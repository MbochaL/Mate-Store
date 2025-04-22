<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index(): string
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('/contenido/inicio')
      . view('/plantillas/footer_view');
  }

  public function comercializacion()
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('/contenido/comercializacion')
      . view('/plantillas/footer_view');
  }

  public function contacto()
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('/contenido/contacto')
      . view('/plantillas/footer_view');
  }

  public function quienesSomos()
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('/contenido/quienes_somos')
      . view('/plantillas/footer_view');
  }

  public function terminosyCondiciones()
  {
    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('/contenido/terminos_y_condiciones')
      . view('/plantillas/footer_view');
  }
}