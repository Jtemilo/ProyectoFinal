<?php 
namespace App\Models;

use CodeIgniter\Model;

class Estado extends Model{
    protected $table      = 'estados_pedidos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'estado_id';
    protected $allowedFields = ['estado_id', 'estado'];
}