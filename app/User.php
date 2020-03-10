<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;


class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','pais','apellido', 'nombreUsuario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    public function fotos()
    {
        return $this->hasMany(Photo::class);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new App\Notifications\ResetPassword($token));
    }


}
