<?php

namespace App\Models;

use CodeIgniter\Model;

//contiene la logica para acceder y manipular los datos

class usuarioModel extends Model
{
    protected $table = 'usuarios'; //nombre de la tabla
    protected $primaryKey = 'id_usuario'; //identificador de la tabla
    protected $allowedFields = ['nombre', 'apellido', 'email', 'password','email','usuario','perfil_id','baja']; //todos los campos de la tabla
}