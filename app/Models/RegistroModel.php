<?php namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table      = 'registro';
    protected $primaryKey = 'id ';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'paterno','materno','cuenta', 'estado','carrera', 'semestre','facultad','ocultar','updated_at','pregistra','Pagado','Acreditado', 'Inombre','correo'];

public function insertar($datos) {
			$Nombres = $this->db->table('registro');
			$Nombres->insert($datos);

			return $this->db->insertID(); 
		}

public function obtenerNombre($data) {
			$Nombres =  $this->db->table('registro');
			$Nombres->where($data);
			return $Nombres->get()->getResultArray();
		}

public function actualizar($data, $id) {
			$Nombres = $this->db->table('registro');
			$Nombres->set($data);
			$Nombres->where('id', $id);
			return $Nombres->update();
		}
public function eliminar($data) {
			$Nombres = $this->db->table('registro');
			$Nombres->where($data);
			return $Nombres->delete();
		}
public function listarNombres() {
			$Nombres = $this->db->query("SELECT * FROM registro");
			return $Nombres->getResult();
		}
		
    
}