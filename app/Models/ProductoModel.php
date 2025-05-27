<?php

namespace app\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table      = 'producto';
    protected $primaryKey = 'id_producto';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nombre_producto',
        'descripcion_producto',
        'precio_producto',
        'img_producto',
        'estado_producto',
        'stock_producto',
        'id_categoria',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
}
