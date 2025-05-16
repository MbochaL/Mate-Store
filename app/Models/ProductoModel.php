<?php

namespace app\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
  protected $table      = 'producto';
  protected $primaryKey = 'id_producto';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array'; //object
  protected $useSoftDeletes = false;

  protected $allowedFields = ['id_producto', 'nombre_producto', 'precio_producto', 'img_producto', 'estado_producto', 'cantidad_producto', 'id_categoria'];

  protected bool $allowEmptyInserts = false;
  protected bool $updateOnlyChanged = true;

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
}
