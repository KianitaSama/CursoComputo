<?php namespace App\Controllers;

use App\Models\RegistroModel;
use App\Models\RegistrosModel;
use App\Models\CursosModel;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [];
		if(! session()->get('isLoggedIn'))
          redirect()->to('inicio');

        $Crud = new CursosModel();
		$datos = $Crud->listarNombres();

		$dat = [
					"datos" => $datos,
				];

        echo view('general/header', $data);
		echo view('dashboard', $dat );
		echo view('general/footer');
	}

	public function Borrar($id){

		$model = new RegistroModel();
		$data = ["id" => $id];

		$model->eliminar($data);
		
		echo view('general/header');
		echo view('registro');
		echo view('general/footer');

	}

	public function Guadar(){

		if(! session()->get('isLoggedIn'))
          redirect()->to('inicio'); 


	
		$data = [];
        helper(['form']);

		if($this->request->getMethod()=='post'){
			$rules =[
				'nombre' => 'required|min_length[3]|max_length[20]',
				'cuenta' => 'required|min_length[8]|max_length[9]', 
				
			];

			if(! $this->validate($rules)){
				$data['validation'] = $this->validator;

			}else{
				$model = new RegistroModel();
				$model1 = new RegistrosModel();
				$newData = [

					
					'nombre' => $this->request->getVar('nombre'),
					'paterno' => $this->request->getVar('paterno'),
					'materno' => $this->request->getVar('materno'),
					'cuenta' => $this->request->getVar('cuenta'),
					'estado' => $this->request->getVar('estado'),					
					'carrera' => $this->request->getVar('carrera'),
					'semestre' => $this->request->getVar('semestre'),					
					'facultad' => $this->request->getVar('facultad'),
					'pregistra' => $this->request->getVar('pregistra'),
					'Pagado' => $this->request->getVar('Pagado'),
					'Inombre' => $this->request->getVar('Inombre'),	
					'correo' => $this->request->getVar('correo'),	
					
				];
				$model->save($newData);
				$model1->insertar($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('registro');
			}
		}
		
        echo view('general/header');
		echo view('registro');
		echo view('general/footer');
	
  }

       
    public function editarR($id){
   
        $data = ["id" => $id];
		$model = new RegistroModel();
		$respuesta = $model->obtenerNombre($data);
		$datos = ["datos" => $respuesta];		
		return view('actualizar', $datos);

     }

    public function actualizar(){

		$datos = [
  					"id" => $_POST['id'],
				    "pregistra" => $_POST['pregistra'],
					"nombre" => $_POST['nombre'],
					"paterno" => $_POST['paterno'],
					"materno" => $_POST['materno'],					
					"cuenta" => $_POST['cuenta'],
					"estado" => $_POST['estado'],
					"carrera" => $_POST['carrera'],
					"semestre" => $_POST['semestre'],
					"facultad" => $_POST['facultad'],
					"Pagado" => $_POST['Pagado'],
					"Acreditado" => $_POST['Acreditado'],
					"Entregado" => $_POST['Entregado'],
					"correo" => $_POST['correo'],
					"Inombre" => $_POST['Inombre'],		
				];

		$id = $_POST['id'];
		$model = new RegistroModel();		
		$model->insertar($datos);       
		$respuesta = $model->actualizar($datos, $id);

		if ($respuesta) {
			 view('general/header');
			return redirect()->to(base_url().'../Buscador')->with('mensaje','2');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','3');
		}


	}

	public function mostrarlista()
	{
        $model = new RegistroModel();
        $datos = $model->listarNombres();
        $mensaje = session('mensaje');

        $data=[
        		"datos" => $datos,      		

        ];
        echo view('general/header');
		return view('VistaUsuario', $data );
		echo view('general/footer');
	}

	public function listas()
	{			

        echo view('general/header');
		echo view('Grupos/listas');
		echo view('general/footer');
	}


}
