<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntaEnviadaModel extends Model
{
    protected $table = 'preguntaenviada';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
