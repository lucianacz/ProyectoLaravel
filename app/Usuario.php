<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  public $table = 'usuarios';
  public $id = 'id';
  public $timestamps = false;
}
