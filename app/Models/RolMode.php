<?php

namespace app\Models;

use CodeIgniter\Model;

class VentaModel extends Model{
    protected $table      = 'venta';
    protected $primaryKey = 'id_rol';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //object
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_rol','descripcion_rol'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}