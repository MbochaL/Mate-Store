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

  public function guardar_factura()
  {
    $cart = \Config\Services::cart();
    $facturaModel = new FacturaModel();
    $ventaModel = new VentaModel();
    $productoModel = new ProductoModel();

    $cartItems = $cart->contents();

    // Verificación de stock
    foreach ($cartItems as $item) {
      $producto = $productoModel->where('id_producto', $item['id'])->first();
      if ($producto['stock_producto'] < $item['qty']) {
        return redirect()->to('carrito')->with('mensaje', 'No hay suficiente stock para el producto: ' . $producto['nombre_producto']);
      }
    }

    //Insertar factura
    $facturaData = array(
      'id_usuario' => session('id_usuario'),
      'fecha_factura' => date('Y-m-d'),
      'total_factura' => $cart->total()
    );
    $id_factura = $facturaModel->insert($facturaData);

    //Insertar ventas y acturalizar el stock
    $cartItems = $cart->contents();
    foreach ($cartItems as $item) {
      $venta = array(
        'id_factura' => $id_factura,
        'id_producto' => $item['id'],
        'cantidad_venta' => $item['qty'],
        'precio_unitario_venta' => $item['price'],
      );

      //Actualizar el stock del producto
      $producto = $productoModel->where('id_producto', $item['id'])->first();

      $data = ['stock_producto' => $producto['stock_producto'] - $item['qty'],];
      $productoModel->update($item['id'], $data);

      $ventaModel->insert($venta);
    }

    // Vacía el carrito de compras
    $cart->destroy();

    //Redirigir al resumen de compra
    return redirect()->to('factura/mostrar/' . $id_factura)->with('mensaje', 'Compra realizada con éxito');
  }

  public function mostrar_factura($id = null)
  {
    $cart = \Config\Services::cart();
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
}
