<?php

namespace app\Models;

use CodeIgniter\Model;

class ContactoModel extends Model{
    protected $table      = 'consulta';
    protected $primaryKey = 'id_consulta';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //object
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_consulta','nombre_consulta', 'email_consulta','asunto', 'mensaje_consulta'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}