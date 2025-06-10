<?php

namespace App\Controllers;

use App\Models\FacturaModel;
use App\Models\VentaModel;
use App\Models\UsuarioModel;
use App\Models\ProductoModel;

class VentaController extends BaseController
{
  public function lista_ventas()
  {
    $facturaModel = new FacturaModel();

    $data['facturas'] = $facturaModel
      ->join('usuario', 'usuario.id_usuario = factura.id_usuario')
      ->select('factura.*, usuario.nombre_usuario, usuario.apellido_usuario')
      ->findAll();

    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('admin/ventas/lista-ventas', $data);
  }

  public function crear_venta()
  {
    $userModel = new UsuarioModel();
    $productoModel = new ProductoModel();

    $data['usuarios'] = $userModel->findAll();
    $data['productos'] = $productoModel->findAll();

    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('admin/ventas/crear-venta', $data);
  }

  public function guardar_venta()
  {
    $cart = \Config\Services::cart();

    if (empty($cart->contents())) {
      return redirect()->to('carrito')->with('mensaje', 'El carrito está vacío');
    }

    // 1. Insertar factura
    $facturaModel = new FacturaModel();
    $idFactura = $facturaModel->insert([
      'id_usuario' => session('id_usuario'),
      'fecha_factura' => date('Y-m-d H:i:s'),
      'total_factura' => $cart->total()
    ]);

    // 2. Insertar ventas
    $ventaModel = new VentaModel();

    foreach ($cart->contents() as $item) {
      $ventaModel->insert([
        'id_factura' => $idFactura,
        'id_producto' => $item['id'],
        'cantidad_venta' => $item['qty'],
        'precio_unitario_venta' => $item['price']
      ]);
    }

    // 3. Vaciar el carrito
    $cart->destroy();

    // 4. Redirigir al resumen de compra
    return redirect()->to('factura/ver/' . $idFactura)->with('mensaje', 'Compra realizada con éxito');
  }


  public function detalle_venta($id)
  {
    $facturaModel = new FacturaModel();
    $ventaModel = new VentaModel();

    $data['factura'] = $facturaModel
      ->join('usuario', 'usuario.id_usuario = factura.id_usuario')
      ->select('factura.*, usuario.nombre_usuario, usuario.apellido_usuario')
      ->find($id);

    $data['detalles'] = $ventaModel
      ->join('producto', 'producto.id_producto = venta.id_producto')
      ->select('venta.*, producto.nombre_producto')
      ->where('id_factura', $id)
      ->findAll();

    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('admin/ventas/detalle-venta', $data);
  }

  public function eliminar_venta($id)
  {
    $ventaModel = new VentaModel();
    $facturaModel = new FacturaModel();

    $ventaModel->where('id_factura', $id)->delete();
    $facturaModel->delete($id);

    return redirect()->to('/ventas')->with('mensaje', 'Venta eliminada correctamente');
  }
}
