<?php

namespace app\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
  protected $table      = 'usuario';
  protected $primaryKey = 'id_usuario';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array'; //object
  protected $useSoftDeletes = false;

  protected $allowedFields = ['id_usuario', 'apellido_usuario', 'nombre_usuario', 'telefono_usuario', 'email_usuario', 'dni_usuario', 'direccion_usuario', 'password_usuario', 'estado_usuario', 'id_rol'];

  protected bool $allowEmptyInserts = false;
  protected bool $updateOnlyChanged = true;

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
}
