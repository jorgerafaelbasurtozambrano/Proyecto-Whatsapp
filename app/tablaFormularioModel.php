<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tablaFormularioModel extends Model
{
    protected $table = 'formulario';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getPreguntas()
    {
        return $this->hasMany('App\tablaPreguntasModel','idFormulario','id');
    }
}
