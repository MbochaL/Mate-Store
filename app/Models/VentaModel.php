<?php

namespace app\Models;

use CodeIgniter\Model;

class VentaModel extends Model
{
  protected $table = 'venta';
  protected $primaryKey = 'id_venta';
  protected $useAutoIncrement = true;
  protected $returnType     = 'array';
  protected $useSoftDeletes = false;

  protected $allowedFields = [
    'id_factura',
    'id_producto',
    'cantidad_venta',
    'precio_unitario_venta'
  ];

  protected bool $allowEmptyInserts = true;
  protected bool $updateOnlyChanged = true;
}
