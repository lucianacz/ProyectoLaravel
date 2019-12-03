<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//modelo interactua con BD

class Nota extends Model
{
    public $table = 'notas';
    public $timestamps = false;


    public function usuario ()
    {
        return $this->belongsTo(Usuario::class, 'idUsuario');
    }

}
