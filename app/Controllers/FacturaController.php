<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FacturaModel;
use App\Models\VentaModel;
use App\Models\ProductoModel;

class FacturaController extends BaseController
{
  public function lista_facturas()
  {
    $facturaModel = new FacturaModel();

    $data['facturas'] = $facturaModel
      ->select('factura.*, usuario.nombre_usuario, usuario.apellido_usuario')
      ->join('usuario', 'usuario.id_usuario = factura.id_usuario')
      ->orderBy('id_factura', 'DESC')
      ->findAll();

    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('admin/facturas/lista-facturas', $data);
  }

  public function detalle_factura($id)
  {
    $facturaModel = new FacturaModel();
    $ventaModel   = new VentaModel();

    $data['factura'] = $facturaModel
      ->select('factura.*, usuario.nombre_usuario, usuario.apellido_usuario')
      ->join('usuario', 'usuario.id_usuario = factura.id_usuario')
      ->where('id_factura', $id)
      ->first();

    if (!$data['factura']) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Factura no encontrada");
    }

    $data['ventas'] = $ventaModel
      ->join('producto', 'producto.id_producto = venta.id_producto')
      ->select('venta.*, producto.nombre_producto')
      ->where('id_factura', $id)
      ->findAll();

    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('admin/facturas/detalle-factura', $data);
  }

  public function mostrar_factura($id = null)
  {
    $facturaModel = new FacturaModel();
    $ventaModel = new VentaModel();
    $productoModel = new ProductoModel();

    // 1. Obtener la factura
    $factura = $facturaModel->find($id);

    if (!$factura) {
      return redirect()->to('/')->with('mensaje', 'Factura no encontrada');
    }

    // 2. Obtener ventas asociadas
    $ventas = $ventaModel
      ->select('id_venta, id_factura, id_producto, cantidad_venta, precio_unitario_venta')
      ->where('id_factura', $id)
      ->findAll();

    // 3. Obtener datos de producto para cada venta
    foreach ($ventas as &$venta) {
      $producto = $productoModel->find($venta['id_producto']);
      $venta['producto'] = $producto;
    }

    // 4. Enviar a la vista
    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('cliente/factura', ['factura' => $factura, 'ventas' => $ventas])
      . view('plantillas/footer_view');
  }
}
