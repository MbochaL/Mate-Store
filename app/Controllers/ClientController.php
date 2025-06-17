<?php

namespace App\Controllers;

class ClientController extends BaseController
{
  public function index(): string
  {
    $productoModel = new \App\Models\ProductoModel();
    $categoriaModel = new \App\Models\CategoriaModel();
    $destacados = [];

    $categorias = ['Mate', 'Bombilla', 'Termo'];

    foreach ($categorias as $nombreCategoria) {
      $categoria = $categoriaModel->where('nombre_categoria', $nombreCategoria)->first();
      if ($categoria) {
        $producto = $productoModel
          ->where('id_categoria', $categoria['id_categoria'])
          ->where('estado_producto', 1)
          ->orderBy('id_producto', 'ASC')
          ->first();

        if ($producto) {
          $destacados[] = [
            'categoria' => $nombreCategoria,
            'producto' => $producto
          ];
        }
      }
    }

    return view('/plantillas/header_view')
      . view('/plantillas/nav_view')
      . view('cliente/home/carrusel')
      . view('cliente/home/destacados', ['destacados' => $destacados])
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

  public function catalogo()
  {
    $productoModel = new \App\Models\ProductoModel();

    $productos = $productoModel
      ->where('estado_producto', 1)
      ->orderBy('nombre_producto', 'ASC')
      ->findAll();

    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('cliente/catalogo', ['productos' => $productos])
      . view('plantillas/footer_view');
  }

  public function catalogoPorCategoria($categoriaSlug)
  {
    $categoriaModel = new \App\Models\CategoriaModel();
    $productoModel  = new \App\Models\ProductoModel();

    $categoria = $categoriaModel->where('LOWER(nombre_categoria)', strtolower($categoriaSlug))->first();

    if (!$categoria) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Categoría no encontrada");
    }

    $productos = $productoModel
      ->where('id_categoria', $categoria['id_categoria'])
      ->where('estado_producto', 1)
      ->orderBy('nombre_producto', 'ASC')
      ->findAll();

    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('cliente/catalogo', [
        'productos' => $productos,
        'titulo' => 'Categoría: ' . $categoria['nombre_categoria']
      ])
      . view('plantillas/footer_view');
  }

  public function detalleProducto($id)
  {
    $productoModel  = new \App\Models\ProductoModel();
    $categoriaModel = new \App\Models\CategoriaModel();

    $producto = $productoModel
      ->join('categoria', 'categoria.id_categoria = producto.id_categoria')
      ->select('producto.*, categoria.nombre_categoria')
      ->find($id);

    if (!$producto) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Producto no encontrado');
    }

    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('cliente/detalle-producto', ['producto' => $producto])
      . view('plantillas/footer_view');
  }

  public function perfil()
  {
    $session = session();

    if (!$session->get('isLogged')) {
      return redirect()->to('/login')->with('mensaje', 'Necesitás estar autenticado');
    }

    $userModel = new \App\Models\UsuarioModel();

    $usuario = $userModel->find($session->get('id_usuario'));

    if (!$usuario) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Usuario no encontrado');
    }

    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('cliente/perfil', ['usuario' => $usuario])
      . view('plantillas/footer_view');
  }
}