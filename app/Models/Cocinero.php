<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cocinero extends Model{
    protected $table      = 'cocineros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cocinero_id';
    protected $allowedFields=['cocinero_id', 'nombre', 'apellido', 'telefono', 'id_especialidad'];
}