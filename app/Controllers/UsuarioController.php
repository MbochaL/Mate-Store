<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\RolModel;

class UsuarioController extends BaseController
{
    public function lista_usuarios()
    {
        $usuarioModel = new UsuarioModel();
        $data['usuarios'] = $usuarioModel->findAll();
        $session = session();

        if ($session->get('isLogged') && $session->get('id_rol')    == 2) {
            return redirect()->to('/inicio')->with('mensaje', 'Necesitás ser admin para ingresar ahi');
        }

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/usuarios/lista-usuarios', $data);
    }

    public function ver_usuario($id)
    {
        $userModel = new \App\Models\UsuarioModel();
        $rolModel  = new \App\Models\RolModel();
        $session = session();

        if ($session->get('isLogged') && $session->get('id_rol')    == 2) {
            return redirect()->to('/inicio')->with('mensaje', 'Necesitás ser admin para ingresar ahi');
        }

        $usuario = $userModel
            ->join('rol', 'rol.id_rol = usuario.id_rol')
            ->select('usuario.*, rol.nombre_rol')
            ->find($id);

        if (!$usuario) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Usuario no encontrado");
        }

        $data['usuario'] = $usuario;

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/usuarios/detalle-usuario', $data);
    }


    public function crear_usuario()
    {
        $rolModel = new RolModel();
        $data['roles'] = $rolModel->findAll();
        $session = session();

        if ($session->get('isLogged') && $session->get('id_rol')    == 2) {
            return redirect()->to('/inicio')->with('mensaje', 'Necesitás ser admin para ingresar ahi');
        }

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/usuarios/crear-usuario', $data);
    }

    public function guardar_usuario()
    {
        $validation = \Config\Services::validation();
        $request = $this->request;

        $validation->setRules([
            'nombre_usuario'     => 'required|max_length[50]',
            'apellido_usuario'   => 'required|max_length[50]',
            'telefono_usuario'   => 'required|max_length[20]',
            'email_usuario'      => 'required|valid_email|is_unique[usuario.email_usuario]',
            'dni_usuario'        => 'required|integer|is_unique[usuario.dni_usuario]',
            'direccion_usuario'  => 'required|max_length[100]',
            'password_usuario'   => 'required|min_length[8]',
            'id_rol'             => 'required|integer',
            'estado_usuario'     => 'required|in_list[0,1]'
        ]);

        if (!$validation->withRequest($request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }

        $model = new UsuarioModel();
        $model->insert([
            'nombre_usuario'     => $request->getPost('nombre_usuario'),
            'apellido_usuario'   => $request->getPost('apellido_usuario'),
            'telefono_usuario'   => $request->getPost('telefono_usuario'),
            'email_usuario'      => $request->getPost('email_usuario'),
            'dni_usuario'        => $request->getPost('dni_usuario'),
            'direccion_usuario'  => $request->getPost('direccion_usuario'),
            'password_usuario'   => password_hash($request->getPost('password_usuario'), PASSWORD_BCRYPT),
            'id_rol'             => $request->getPost('id_rol'),
            'estado_usuario'     => $request->getPost('estado_usuario')
        ]);

        return redirect()->to('/usuarios')->with('mensaje', 'Usuario creado correctamente');
    }

    public function editar_usuario($id)
    {
        $model = new UsuarioModel();
        $rolModel = new RolModel();
        $session = session();

        if ($session->get('isLogged') && $session->get('id_rol')    == 2) {
            return redirect()->to('/inicio')->with('mensaje', 'Necesitás ser admin para ingresar ahi');
        }

        $data['usuario'] = $model->find($id);
        $data['roles'] = $rolModel->findAll();

        return view('plantillas/header_view')
            . view('plantillas/nav_view')
            . view('admin/usuarios/editar-usuario', $data);
    }

    public function actualizar_usuario($id)
    {
        $request = $this->request;
        $model = new UsuarioModel();

        $data = [
            'nombre_usuario'     => $request->getPost('nombre_usuario'),
            'apellido_usuario'   => $request->getPost('apellido_usuario'),
            'telefono_usuario'   => $request->getPost('telefono_usuario'),
            'email_usuario'      => $request->getPost('email_usuario'),
            'dni_usuario'        => $request->getPost('dni_usuario'),
            'direccion_usuario'  => $request->getPost('direccion_usuario'),
            'id_rol'             => $request->getPost('id_rol'),
            'estado_usuario'     => $request->getPost('estado_usuario')
        ];

        if (!empty($request->getPost('password_usuario'))) {
            $data['password_usuario'] = password_hash($request->getPost('password_usuario'), PASSWORD_BCRYPT);
        }

        $model->update($id, $data);

        return redirect()->to('/usuarios')->with('mensaje', 'Usuario actualizado correctamente');
    }

    public function eliminar_usuario($id)
    {
        $model = new UsuarioModel();
        $model->delete($id);

        return redirect()->to('/usuarios')->with('mensaje', 'Usuario eliminado correctamente');
    }
}
