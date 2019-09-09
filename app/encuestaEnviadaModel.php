<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class encuestaEnviadaModel extends Model
{
    protected $table = 'iniciarencuesta';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
