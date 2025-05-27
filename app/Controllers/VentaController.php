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
        $facturaModel = new FacturaModel();
        $ventaModel = new VentaModel();
        $request = $this->request;

        $productos  = $request->getPost('id_producto');
        $cantidades = $request->getPost('cantidad');
        $precios    = $request->getPost('precio');

        $total = 0;

        // Calcular total
        for ($i = 0; $i < count($productos); $i++) {
            if (!empty($productos[$i]) && $cantidades[$i] > 0) {
                $subtotal = floatval($cantidades[$i]) * floatval($precios[$i]);
                $total += $subtotal;
            }
        }

        $facturaId = $facturaModel->insert([
            'id_usuario'     => $request->getPost('id_usuario'),
            'fecha_factura'  => date('Y-m-d H:i:s'),
            'total_factura'  => $total
        ], true);

        for ($i = 0; $i < count($productos); $i++) {
            if (!empty($productos[$i]) && $cantidades[$i] > 0) {
                $ventaModel->insert([
                    'id_factura'     => $facturaId,
                    'id_producto'    => $productos[$i],
                    'cantidad_venta' => $cantidades[$i],
                    'precio_venta'   => $precios[$i],
                ]);
            }
        }

        return redirect()->to('/ventas')->with('mensaje', 'Venta registrada correctamente');
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
