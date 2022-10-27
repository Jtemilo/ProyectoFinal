<?php 
namespace App\Models;

use CodeIgniter\Model;

class DetallePedido extends Model{
    protected $table      = 'detalles_pedidos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_detalle';
    protected $allowedFields=['id_detalle', 'id_pedido', 'id_platillo', 'id_bebida', 'cocinero_id', 'estado_id'];
}