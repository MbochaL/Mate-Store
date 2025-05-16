<?php

namespace app\Models;

use CodeIgniter\Model;

class RolModel extends Model
{
  protected $table      = 'rol';
  protected $primaryKey = 'id_rol';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array'; //object
  protected $useSoftDeletes = false;

  protected $allowedFields = ['id_rol', 'nombre_rol'];

  protected bool $allowEmptyInserts = false;
  protected bool $updateOnlyChanged = true;

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
}
