<?php namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table      = 'registro';
    protected $primaryKey = 'id ';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'paterno','materno','cuenta', 'estado','modalidad','carrera', 'sementre','externo','facultad','ocultar','updated_at'];

    
}