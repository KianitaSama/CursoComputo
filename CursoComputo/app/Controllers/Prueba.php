<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;//se llama al modelo para la conexion de la base de datos

class Prueba extends BaseController
{
    
    public function test(){
        $userModel = new UserModel($db);
        $user = $userModel->find('2');
        var_dump($user);
        return view('general/header').view('general/body');// las views son string y se pueden concatenar
    }

	//--------------------------------------------------------------------

} 
