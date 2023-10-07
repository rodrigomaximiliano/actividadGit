<?php

namespace App\Controllers;

use App\Models\usuarioModel;
use CodeIgniter\Controller;
//Maneja la validacion y almacenamiento de datos del formulario registro
class usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $dato['titulo'] = 'Registro';
        echo view('front/header', $dato);
        echo view('back/usuario/registro');
        echo view('front/footer');
    }
  
    public function formValidation()
    {
        $input = $this->validate( [
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'password' => 'required|min_length[3]|max_length[10]'
        ]);

        //Utiliza el model para interactuar con la base de datos
          $formModel = new usuarioModel();
          if (!$input){
            $data['titulo'] = 'Registro';
            echo view('front/header',$data);
            echo view('back/usuario/registro',['validation'=> $this->validator]);
            echo view('front/footer');

          }else{
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido'=> $this->request->getVar('apellido'),
                'usuario' =>$this->request->getVar('usuario'),
                'email'  =>$this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                //obtiene el valor del campo 'password' del formulario y se utiliza la función password_hash() para generar un hash seguro de la contraseña. El resultado del hash se guarda en la columna 'password' en la base de datos
                
            ]);


           session()->setFlashdata('success','Usuario registrado con exito');
           return $this->response->redirect('login');
          }
           }
        }
        
    








