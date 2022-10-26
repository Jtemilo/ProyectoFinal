<?php 
namespace App\Models;

use CodeIgniter\Model;

class Pedido extends Model{
    protected $table      = 'pedidos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_pedido';
    protected $allowedFields=['id_pedido', 'cod_mesero', 'fecha_pedido', 'gerente_id', 'fecha_hora'];
}