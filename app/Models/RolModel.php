<?php

namespace app\Models;

use CodeIgniter\Model;

class RolModel extends Model {
    protected $table      = 'rol';
    protected $primaryKey = 'id_rol';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['descripcion_rol'];
}