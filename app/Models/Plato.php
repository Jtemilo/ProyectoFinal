<?php 
namespace App\Models;

use CodeIgniter\Model;

class Plato extends Model{
    protected $table      = 'platos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_platillo';
    protected $allowedFields=['id_platillo', 'nombre','id_tamaño'];
}