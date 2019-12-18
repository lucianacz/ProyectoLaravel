<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  public $table = 'photos';
  protected $primaryKey = 'photo_id';
  public $timestamps = false;


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'photo_id', 'user_id', 'nombre', 'region', 'pais', 'titulo'
  ];



  public function usuario ()
  {
      return $this->belongsTo(User::class, 'user_id', 'id');
  }
}
