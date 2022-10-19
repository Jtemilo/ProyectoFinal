<?php 
namespace App\Models;

use CodeIgniter\Model;

class Gerente extends Model{
    protected $table      = 'gerentes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'gerente_id';
    protected $allowedFields=['gerente_id','nombre','apellido','contra'];
}