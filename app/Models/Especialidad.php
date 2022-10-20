<?php 
namespace App\Models;

use CodeIgniter\Model;

class Especialidad extends Model{
    protected $table      = 'especialidades';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'especialidad_id';
    protected $allowedFields = ['especialidad_id', 'especialidad'];
}