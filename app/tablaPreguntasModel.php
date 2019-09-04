<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tablaPreguntasModel extends Model
{
    protected $table = 'preguntas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getRespuestas()
    {
        return $this->hasMany('App\tablaRespuestaModel','idPregunta','id');
    }
}
