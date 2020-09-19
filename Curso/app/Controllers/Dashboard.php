<?php namespace App\Controllers;

use App\Models\RegistroModel;

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

	public function Guadar()
	{
		if(! session()->get('isLoggedIn'))
          redirect()->to('inicio'); 
	
		$data = [];

		helper(['form']);
		if($this->request->getMethod()=='post'){
			$rules =[
				'nombre' => 'required|min_length[3]|max_length[20]',
				'cuenta' => 'required|min_length[9]|max_length[9]', 
				
			];

			if(! $this->validate($rules)){
				$data['validation'] = $this->validator;
			}else{
				$model = new RegistroModel();
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
					
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('registro');
			}
		}
		
        echo view('general/header');
		echo view('registro');
		echo view('general/footer');
	
  }
}