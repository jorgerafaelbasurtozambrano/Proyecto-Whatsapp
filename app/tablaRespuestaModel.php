<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tablaRespuestaModel extends Model
{
    protected $table = 'respuestas';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
