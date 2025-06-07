<?php

namespace App\Controllers;

use App\Models\FacturaModel;
use App\Models\VentaModel;

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
            . view('admin/facturas/lista-facturas', $data)  ;
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