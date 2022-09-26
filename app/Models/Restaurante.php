<?php

namespace App\Models;

use CodeIgniter\Model;

class Restaurante extends Model
{
    protected $table      = 'editoriales';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cod_editorial';
    protected $allowedFields = ['cod_editorial', 'nombre', 'direccion', 'telefono', 'email', 'url'];
}
