<?php

namespace App\Models;
use CodeIgniter\Model;

class PersonaModel extends Model
{
    protected $table = 'domicilio';
    protected $primaryKey = 'id_domicilio';
    protected $allowedFields = ['id_usuario', 'direccion', 'telefono', 'ciudad', 'pais', 'dni', 'codigo_postal'];
}
