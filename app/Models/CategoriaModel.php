<?php

namespace app\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
  protected $table      = 'categoria';
  protected $primaryKey = 'id_categoria';
  protected $useAutoIncrement = true;
  protected $returnType     = 'array';
  protected $useSoftDeletes = false;

  protected $allowedFields = ['nombre_categoria'];

  protected bool $allowEmptyInserts = false;
  protected bool $updateOnlyChanged = true;
}
