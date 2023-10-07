<?php


namespace App\Controllers;
use CodeIgniter\Model;
class loginModel extends Model{
    protected $table ='usuarios';
    protected $primaryKey ='id_usuario';
    protected $allowedFields = ['email','password'];
}