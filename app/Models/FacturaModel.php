<?php

namespace app\Models;

use CodeIgniter\Model;

class FacturaModel extends Model
{
    protected $table      = 'factura';
    protected $primaryKey = 'id_factura';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id_usuario',
        'fecha_factura',
        'total_factura'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
}
