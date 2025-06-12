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

    public function detalle_venta($id)
    {
        $cart = \Config\Services::cart();
        $facturaModel = new FacturaModel();
        $ventaModel = new VentaModel();

        $data['factura'] = $facturaModel
            ->select('factura.*, usuario.nombre_usuario, usuario.apellido_usuario')
            ->join('usuario', 'usuario.id_usuario = factura.id_usuario')
            ->find($id);

        $data['venta'] = $ventaModel
            ->select('venta.*, producto.nombre_producto')
            ->join('producto', 'producto.id_producto = venta.id_producto')
            ->where('venta.id_factura', $id)
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