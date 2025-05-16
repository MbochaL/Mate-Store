<?php

namespace app\Models;

use CodeIgniter\Model;

class FacturaModel extends Model
{
  protected $table      = 'factura';
  protected $primaryKey = 'id_factura';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array'; //object
  protected $useSoftDeletes = false;

  protected $allowedFields = ['id_venta', 'fecha_factura', 'total_factura', 'id_usuario'];

  protected bool $allowEmptyInserts = false;
  protected bool $updateOnlyChanged = true;

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
}
