<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\CursosModel;
use App\Models\RegistroModel;

class Prueba extends BaseController
{

    public function Fgrupos(){

    	echo view('general/header');
		echo view('Grupos/fgrupos');
		echo view('general/footer');       
    }

    public function buscar(){

        $Crud = new CursosModel();
        $datos = $Crud->listarNombres();

        $dat = [
                    "datos" => $datos,
                ];

        echo view('general/header');
        echo view('Grupos/consulta',$dat);
        echo view('general/footer');       
    }

    public function busqueda(){


        $Crud = new CursosModel();
        $datos = $Crud->listarNombres();

        $dat = [
                    "datos" => $datos,
                ];

        echo view('general/header');
        echo view('Grupos/Busqueda', $dat);
        echo view('general/footer');       
    }

    public function Ggrupos(){

        $datos = [
                    "Inombre" => $_POST['Inombre'],
                    "InicioC" => $_POST['InicioC'],
                    "FinC" => $_POST['FinC']
                ];

        $Crud = new CursosModel();
        $Crud->insertar($datos);

        
        echo view('general/header');
        echo view('Grupos/fgrupos');
        echo view('general/footer');  

            
    }

    public function intento($Inombre)
    {

        $data = ["Inombre" => $Inombre];
        $model = new RegistroModel();
        $respuesta = $model->obtenerNombre($data);

        $datos = ["datos" => $respuesta];

        echo view('general/header');
        return view('Grupos/Prueba', $datos);                
        echo view('general/footer');
    }



	//--------------------------------------------------------------------

} 
