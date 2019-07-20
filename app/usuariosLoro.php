<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class usuariosLoro extends Eloquent
{
    protected $connection = 'mongodb';
    protected $guarded = [];
    //protected $fillable = ['id', 'nombres', 'apellidos', 'cedula', 'correo', 'telefono'];
}
