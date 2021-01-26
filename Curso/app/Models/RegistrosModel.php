<?php namespace App\Models;

use CodeIgniter\Model;

class RegistrosModel extends Model
{

	public function listarNombres() {
			$Nombres = $this->db->query("SELECT * FROM registros");
			return $Nombres->getResult();
		}
	public function insertar($datos) {
			$Nombres = $this->db->table('registros');
			$Nombres->insert($datos);

			return $this->db->insertID(); 
		}
    public function obtenerNombre($data) {
			$Nombres =  $this->db->table('registros');
			$Nombres->where($data);
			return $Nombres->get()->getResultArray();
		}
    
}