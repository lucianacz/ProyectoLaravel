<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//modelo interactua con BD

class Usuario extends Model
{
    public $table = 'usuarios';
    public $id = 'id';
    public $timestamps = false;



}
