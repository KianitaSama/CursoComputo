<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		echo view('layout/header');
		echo view('carrusel');
		echo view('layout/footer');
	}

	public function iniciosesion()
	{
		
		echo view('layout/header');
		echo view('iniciosesion');
		echo view('layout/footer');
	}

	public function registro()
	{
		
		echo view('layout/header');
		echo view('registro');
		echo view('layout/footer');
	}
    private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'cuenta' => $user['cuenta'],
			'email' => $user['email'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	public function register(){
      
		$data = [];
        helper(['form']);

		if($this->request->getMethod()=='post'){
			$rules =[

				'password' => 'required|min_length[8]|max_length[255]',
				'password_confirm' => 'matches[password]',
				'cuenta' => 'required|min_length[8]|max_length[9]', 
				
			];

			if(! $this->validate($rules)){
				$data['validation'] = $this->validator;

			}else{
				$model = new RegistroModel();
				$newData = [
					'cuenta' => $this->request->getVar('cuenta'),
					'password' => $this->request->getVar('password'),
					
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('registro');
			}
		}
		
        echo view('layout/header');
		echo view('registro');
		echo view('layout/footer');


	//--------------------------------------------------------------------
 }
}
