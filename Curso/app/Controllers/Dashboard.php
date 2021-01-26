<?php namespace App\Controllers;

use App\Models\RegistroModel;
use App\Models\RegistrosModel;
class Dashboard extends BaseController
{
	public function index()
	{
		$data = [];
		if(! session()->get('isLoggedIn'))
          redirect()->to('inicio');

        echo view('general/header', $data);
		echo view('dashboard');
		echo view('general/footer');
	}

	public function Borrar(){
		
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
					'modalidad' => $this->request->getVar('modalidad'),
					'carrera' => $this->request->getVar('carrera'),
					'sementre' => $this->request->getVar('sementre'),
					'externo' => $this->request->getVar('externo'),
					'facultad' => $this->request->getVar('facultad'),
					'Pregistro' => $this->request->getVar('Pregistro'),
					'Pagado' => $this->request->getVar('Pagado'),

					
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

  	private function setUserDate($user){

		$data = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'],
			"Pregistro" => $_POST['Pregistro'],
			"cuenta" => $_POST['cuenta'],
			"modalidad" => $_POST['modalidad'],
			"carrera" => $_POST['carrera'],
			"sementre" => $_POST['sementre'],
			"externo" => $_POST['externo'],
			"facultad" => $_POST['facultad'],
			"Pagado" => $_POST['Pagado'],
			"Acreditado" => $_POST['Acreditado'],
			"Entregado" => $_POST['Entregado'],
			"curso" => $_POST['curso']
			
		];

		
		return true;
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
					"nombre" => $_POST['nombre'],
					"paterno" => $_POST['paterno'],
					"materno" => $_POST['materno'],
					"Pregistro" => $_POST['Pregistro'],
					"cuenta" => $_POST['cuenta'],
					"modalidad" => $_POST['modalidad'],
					"carrera" => $_POST['carrera'],
					"sementre" => $_POST['sementre'],
					"externo" => $_POST['externo'],
					"facultad" => $_POST['facultad'],
					"Pagado" => $_POST['Pagado'],
					"Acreditado" => $_POST['Acreditado'],
					"Entregado" => $_POST['Entregado'],
					"curso" => $_POST['curso']
				];
		$id = $_POST['id'];

		$model = new RegistroModel();
		$model1 = new RegistrosModel();
		$model1->insertar($datos);

		$respuesta = $model->actualizar($datos, $id);

		if ($respuesta) {
			 view('general/header');
			return redirect()->to(base_url().'../registro')->with('mensaje','2');
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
		echo view('listas');
		echo view('general/footer');
	}


}
