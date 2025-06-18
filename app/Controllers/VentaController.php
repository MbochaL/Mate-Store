<?php

namespace App\Controllers;

use App\Models\FacturaModel;
use App\Models\VentaModel;

class VentaController extends BaseController
{
    public function lista_ventas()
    {
        $facturaModel = new FacturaModel();
        $session = session();

        if ($session->get('isLogged') && $session->get('id_rol')    == 2) {
            return redirect()->to('/inicio')->with('mensaje', 'Necesitás ser admin para ingresar ahi');
        }

        $data['facturas'] = $facturaModel
            ->join('usuario', 'usuario.id_usuario = factura.id_usuario')
            ->select('factura.*, usuario.nombre_usuario, usuario.apellido_usuario')
            ->findAll();

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/ventas/lista-ventas', $data);
    }

    public function detalle_venta($id)
    {
        $cart = \Config\Services::cart();
        $facturaModel = new FacturaModel();
        $ventaModel = new VentaModel();
        $session = session();

        if ($session->get('isLogged') && $session->get('id_rol')    == 2) {
            return redirect()->to('/inicio')->with('mensaje', 'Necesitás ser admin para ingresar ahi');
        }

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
}