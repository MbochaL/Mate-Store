<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class AuthController extends BaseController
{
  public function formulario_registro()
  {
    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('auth/register')
      . view('plantillas/footer_view');
  }

  public function register()
  {
    $validation = \Config\Services::validation();
    $request = \Config\Services::request();

    $validation->setRules([
      'nombre_usuario'   => 'required|max_length[150]',
      'apellido_usuario' => 'required|max_length[150]',
      'telefono_usuario' => 'required|max_length[10]',
      'email_usuario'    => 'required|valid_email|is_unique[usuario.email_usuario]',
      'dni_usuario' => 'required|max_length[8]',
      'direccion_usuario' => 'required|max_length[100]',
      'pass_usuario'     => 'required|min_length[8]|max_length[255]',
    ], [
      'email_usuario' => [
        'is_unique' => 'El correo ya está registrado.',
      ],
      'pass_usuario1' => [
        'matches' => 'Las contraseñas no coinciden.',
      ]
    ]);

    if (!$validation->withRequest($request)->run()) {
      return redirect()->back()->withInput()->with('validation', $validation->getErrors());
    }

    $userModel = new UsuarioModel();
    $userModel->insert([
      'apellido_usuario' => $request->getPost('apellido_usuario'),
      'nombre_usuario'   => $request->getPost('nombre_usuario'),
      'telefono_usuario' => $request->getPost('telefono_usuario'),
      'email_usuario'     => $request->getPost('email_usuario'),
      'dni_usuario'     => $request->getPost('dni_usuario'),
      'direccion_usuario'     => $request->getPost('direccion_usuario'),
      'password_usuario' => password_hash($request->getPost('pass_usuario'), PASSWORD_BCRYPT),
      'estado_usuario'   => 1,
      'id_rol'           => 2,
    ]);

    return redirect()->route('login');
  }

  public function formulario_login()
  {
    return view('plantillas/header_view')
      . view('plantillas/nav_view')
      . view('auth/login')
      . view('plantillas/footer_view');
  }

  public function login()
  {
    $request = \Config\Services::request();
    $session = session();

    $validation = \Config\Services::validation();
    $validation->setRules([
      'email_usuario' => 'required|valid_email',
      'pass_usuario'  => 'required|min_length[8]',
    ]);

    if (!$validation->withRequest($request)->run()) {
      return redirect()->back()->withInput()->with('validation', $validation->getErrors());
    }

    $userModel = new UsuarioModel();
    $user = $userModel->where('email_usuario', $request->getPost('email_usuario'))->first();

    if ($user && password_verify($request->getPost('pass_usuario'), $user['password_usuario'])) {
      $session->set([
        'id_usuario'       => $user['id_usuario'],
        'nombre_usuario'   => $user['nombre_usuario'],
        'apellido_usuario' => $user['apellido_usuario'],
        'id_rol'           => $user['id_rol'],
        'isLogged'            => true,
      ]);

      return $user['id_rol'] == 1
        ? redirect()->route('admin_dashboard')
        : redirect()->route('/');
    }

    return redirect()->route('login')->with('mensaje', 'Credenciales inválidas');
  }

  public function logout()
  {
    session()->destroy();
    return redirect()->route('/')->with('mensaje', 'Sesión cerrada');
  }
}
