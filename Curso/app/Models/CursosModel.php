<?php namespace App\Models;

use CodeIgniter\Model;

class CursosModel extends Model
{
	public function listarNombres() {
			$Nombres = $this->db->query("SELECT * FROM cursos");
			return $Nombres->getResult();
		}
		
	public function insertar($datos) {
			$Nombres = $this->db->table('cursos');
			$Nombres->insert($datos);

			return $this->db->insertID(); 
		}
    
}