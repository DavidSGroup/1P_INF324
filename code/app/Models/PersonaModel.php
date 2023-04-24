<?php

namespace App\Models;
use CodeIgniter\Model;

class PersonaModel extends Model{
    protected $table    ='persona';
    protected $primaryKey='id';
    protected $allowedFields= [
        'carnet',
        'ncompleto',
        'fechanac',
        'telefono',
        'departamento'        
    ];


}




?>