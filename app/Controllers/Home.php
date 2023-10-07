<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Inicio';
        echo view('front/header', $data);
        echo view('front/carousel');
        echo view('front/footer');
    }

    public function nosotros(){
        $data['titulo'] = 'Nosotros';
        echo view('front/header', $data);
        echo view('front/nosotros');
        echo view('front/footer');
    }

    public function acerca(){
        $data['titulo'] = 'Acerca de';
        echo view('front/header', $data);
        echo view('front/acerca');
        echo view('front/footer');
    }

    public function registro(){
        
        $data['titulo'] = 'Registrarse';
        echo view('front/header', $data);
        echo view('back/usuario/registro');
        echo view('front/footer');
    }

    public function login(){
        $data['titulo'] = 'Logueo';
        echo view('front/header', $data);
        echo view('back/usuario/login');
        echo view('front/footer');
    }
}
