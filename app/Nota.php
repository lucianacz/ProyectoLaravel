<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//modelo interactua con BD

class Nota extends Model
{
    public $table = 'notas';
    public $timestamps = false;

    protected $casts = [
      'fecha'  => 'date:Y-m-d',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'subtitulo', 'foto', 'pais', 'region', 'parrafo',
       'fecha', 'user_id'
    ];



    public function usuario ()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
