<?php 
namespace App\Models;

use CodeIgniter\Model;

class Tamaño extends Model{
    protected $table      = 'tamaños';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_tamaño';
    protected $allowedFields=['id_tamaño', 'tamaño'];
}