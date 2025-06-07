<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class CategoriaController extends BaseController
{
    public function lista_categorias()
    {
        $model = new CategoriaModel();
        $data['categorias'] = $model->findAll();

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/categorias/lista-categorias', $data);
    }

    public function crear_categoria()
    {
        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/categorias/crear-categoria');
    }

    public function guardar_categoria()
    {
        $model = new CategoriaModel();
        $request = $this->request;

        $validation = \Config\Services::validation();

        $validation->setRules([
            'nombre_categoria' => 'required|max_length[100]',
        ]);

        if (!$validation->withRequest($request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }

        $model->insert([
            'nombre_categoria' => $request->getPost('nombre_categoria'),
        ]);

        return redirect()->to('/categorias')->with('mensaje', 'Categoría creada correctamente.');
    }

    public function editar_categoria($id)
    {
        $model = new CategoriaModel();
        $data['categoria'] = $model->find($id);

        if (!$data['categoria']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Categoría no encontrada");
        }

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/categorias/editar-categoria', $data);
    }

    public function actualizar_categoria($id)
    {
        $model = new CategoriaModel();
        $request = $this->request;

        $validation = \Config\Services::validation();

        $validation->setRules([
            'nombre_categoria' => 'required|max_length[100]',
        ]);

        if (!$validation->withRequest($request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }

        $model->update($id, [
            'nombre_categoria' => $request->getPost('nombre_categoria'),
        ]);

        return redirect()->to('/categorias')->with('mensaje', 'Categoría actualizada correctamente.');
    }

    public function eliminar_categoria($id)
    {
        $model = new CategoriaModel();
        $model->delete($id);

        return redirect()->to('/categorias')->with('mensaje', 'Categoría eliminada correctamente.');
    }
}
