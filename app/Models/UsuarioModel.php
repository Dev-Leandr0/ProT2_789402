<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
  protected $table = 'usuarios';
  protected $primaryKey = 'id';
  protected $allowedFields = ['nombre', 'email', 'password'];
  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
}
