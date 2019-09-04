<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tabla_usuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
