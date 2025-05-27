<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsultaModel extends Model
{
    protected $table = 'consulta';
    protected $primaryKey = 'id_consulta';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id_usuario',
        'nombre_consulta',
        'email_consulta',
        'asunto',
        'mensaje_consulta'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
}
