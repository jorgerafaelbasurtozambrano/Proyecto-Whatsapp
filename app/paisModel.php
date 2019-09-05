<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paisModel extends Model
{
  protected $table = 'pais';
  protected $primaryKey = 'id';
  public $timestamps = false;
}
