<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Panel_controller extends Controller
{
    public function index()
    {
        $session = session();

        // Verificar si el usuario está autenticado
        if (!$session->get('logged_in')) {
            return redirect()->to('/login'); // Redirigir a la página de inicio de sesión
        }

        // Obtener datos del usuario desde la sesión
        $nombre = $session->get('usuario');
        $perfil = $session->get('perfil_id');

        $data['perfil'] = $perfil;  // Pasar el perfil a la vista
        $data['titulo'] = 'Panel del usuario';

        // Cargar las vistas
        echo view('front/header', $data);
        echo view('back/usuario/usuario_logueado', $data); 
        echo view('front/footer');
    }
}
