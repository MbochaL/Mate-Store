<?php

namespace App\Controllers;

use App\Models\ConsultaModel;

class Usuarios_controller extends BaseController
{
    public function add_consulta()
    {
        $validation = \Config\Services::validation();
        $request    = \Config\Services::request();

        $validation->setRules(
            [
                'nombre'   => 'required|max_length[150]',
                'correo'   => 'required|valid_email',
                'asunto'   => 'required|max_length[100]',
                'mensaje'  => 'required|max_length[250]|min_length[10]',
            ],
            [   // Mensajes personalizados
                'nombre' => [
                    'required' => 'El nombre es requerido',
                ],
                'correo' => [
                    'required'     => 'El correo electrónico es obligatorio',
                    'valid_email'  => 'La dirección de correo debe ser válida'
                ],
                'asunto' => [
                    'required'     => 'El asunto es obligatorio',
                    'max_length'   => 'El asunto debe tener como máximo 100 caracteres'
                ],
                'mensaje' => [
                    'required'     => 'La consulta es requerida',
                    'min_length'   => 'La consulta debe tener como mínimo 10 caracteres',
                    'max_length'   => 'La consulta debe tener como máximo 250 caracteres',
                ],
            ]
        );

        if ($validation->withRequest($request)->run()) {
            $data = [
                'nombre_consulta'   => $request->getPost('nombre'),
                'email_consulta'    => $request->getPost('correo'),
                'asunto'            => $request->getPost('asunto'),
                'mensaje_consulta'  => $request->getPost('mensaje'),
            ];

            $consulta = new ConsultaModel();
            $consulta->insert($data);

            return redirect()->route('contacto')->with('mensaje_consulta', '¡Tu consulta fue enviada con éxito!');
        } else {
            $data['titulo']     = 'Contacto';
            $data['validation'] = $validation->getErrors();

            return view('/plantillas/header_view')
                . view('/plantillas/nav_view')
                . view('/contenido/contacto', $data)
                . view('/plantillas/footer_view');
        }
    }
}
