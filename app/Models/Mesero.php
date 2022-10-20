<?php 
namespace App\Models;

use CodeIgniter\Model;

class Mesero extends Model{
    protected $table      = 'meseros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cod_mesero';
    protected $allowedFields=['cod_mesero', 'nombre', 'apellido', 'telefono', 'contra'];
}