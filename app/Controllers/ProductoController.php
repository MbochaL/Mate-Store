<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use App\Models\CategoriaModel;

class ProductoController extends BaseController
{
    public function lista_productos()
    {
        $productoModel = new ProductoModel();
        $data['productos'] = $productoModel->findAll();

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/productos/lista-productos', $data);
    }

    public function ver_producto($id)
    {
        $productoModel = new \App\Models\ProductoModel();

        $producto = $productoModel
            ->join('categoria', 'categoria.id_categoria = producto.id_categoria')
            ->select('producto.*, categoria.nombre_categoria')
            ->find($id);

        if (!$producto) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Producto no encontrado");
        }

        $data['producto'] = $producto;

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/productos/detalle-producto', $data);
    }

    public function crear_producto()
    {
        $categoriaModel = new CategoriaModel();
        $data['categorias'] = $categoriaModel->findAll();

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/productos/crear-producto', $data);
    }

    public function guardar_producto()
    {
        $productoModel = new ProductoModel();
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nombre_producto'       => 'required|max_length[255]',
            'descripcion_producto'  => 'required',
            'precio_producto'       => 'required|decimal',
            'stock_producto'        => 'required|integer',
            'id_categoria'          => 'required|integer',
            'estado_producto'       => 'required|in_list[0,1]',
            'img_producto'          => 'permit_empty|uploaded[img_producto]|is_image[img_producto]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }

        $img = $this->request->getFile('img_producto');
        $imgName = null;

        if ($img && $img->isValid() && !$img->hasMoved()) {
            $imgName = $img->getRandomName();
            $img->move(ROOTPATH . 'assets/uploads/', $imgName);
        }

        $productoModel->insert([
            'nombre_producto'      => $this->request->getPost('nombre_producto'),
            'descripcion_producto' => $this->request->getPost('descripcion_producto'),
            'precio_producto'      => $this->request->getPost('precio_producto'),
            'stock_producto'       => $this->request->getPost('stock_producto'),
            'estado_producto'      => $this->request->getPost('estado_producto'),
            'id_categoria'         => $this->request->getPost('id_categoria'),
            'img_producto'         => $imgName
        ]);

        return redirect()->to('/productos')->with('mensaje', 'Producto creado correctamente');
    }

    public function editar_producto($id)
    {
        $productoModel = new ProductoModel();
        $categoriaModel = new CategoriaModel();

        $data['producto'] = $productoModel->find($id);
        $data['categorias'] = $categoriaModel->findAll();

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/productos/editar-producto', $data);
    }

    public function actualizar_producto($id)
    {
        $validation = \Config\Services::validation();
        $productoModel = new ProductoModel();

        $validation->setRules([
            'nombre_producto'       => 'required|max_length[255]',
            'descripcion_producto'  => 'required',
            'precio_producto'       => 'required|decimal',
            'stock_producto'        => 'required|integer',
            'id_categoria'          => 'required|integer',
            'estado_producto'       => 'required|in_list[0,1]',
            'img_producto'          => 'permit_empty|uploaded[img_producto]|is_image[img_producto]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }

        $data = [
            'nombre_producto'      => $this->request->getPost('nombre_producto'),
            'descripcion_producto' => $this->request->getPost('descripcion_producto'),
            'precio_producto'      => $this->request->getPost('precio_producto'),
            'stock_producto'       => $this->request->getPost('stock_producto'),
            'estado_producto'      => $this->request->getPost('estado_producto'),
            'id_categoria'         => $this->request->getPost('id_categoria'),
        ];

        $img = $this->request->getFile('img_producto');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            $imgName = $img->getRandomName();
            $img->move(ROOTPATH . 'assets/uploads/', $imgName);
            $data['img_producto'] = $imgName;
        }

        $productoModel->update($id, $data);

        return redirect()->to('/productos')->with('mensaje', 'Producto actualizado correctamente');
    }

    public function actualizar_estado_producto($id) {
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);

        if (!$producto) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Producto no encontrado");
        }

        $nuevoEstado = $producto['estado_producto'] ? 0 : 1;
        $productoModel->update($id, ['estado_producto' => $nuevoEstado]);

        return redirect()->to('/productos')->with('mensaje', 'Estado del producto actualizado correctamente');
    }


    public function eliminar_producto($id)
    {
        $productoModel = new ProductoModel();
        $productoModel->delete($id);

        return redirect()->to('/productos')->with('mensaje', 'Producto eliminado correctamente');
    }
}