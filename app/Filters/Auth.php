<?php 
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
 public function before(RequestInterface $request, $arguments = null)
 {
    //si el usuario esta logueado
    if(!session()->get('logged_in')){
        //entonces redireciona a la pagina del login
        return redirect()->to('/login');
    }
 } 
public function after(RequestInterface $request, ResponseInterface $respone, $arguments = null)  
}