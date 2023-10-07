<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
//Maneja la validacion y almacenamiento de datos del login

class Login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
        $data['titulo'] = 'Login';
        echo view('front/header', $data);
        echo view('back/usuario/login');
        echo view('front/footer');
    }

    public function auth()
    {
        $session = session();
        $model = new usuarioModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $model->where('email', $email)->first();
        if ($data) {
            $storedPassword = $data['password'];
            $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to(base_url('/login'));
            }

            $verify_pass = password_verify($password, $storedPassword);
            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                session()->setFlashdata('msg', '¡Bienvenido!');
                return redirect()->to(base_url('/panel_controller'));
            } else {
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to(base_url('/login'));
            }
        } else {
            $session->setFlashdata('msg', 'No existe el correo o es incorrecto');
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/'));
    }
}
