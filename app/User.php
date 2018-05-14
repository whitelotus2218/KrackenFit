<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'genero', 'cumpleaños', 'telefono', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'estudio_id', 'rutina_id',
    ];
    public function rutinas(){
        return $this->hasMany(Rutina::class);
    }
    public function estudios(){
        return $this->hasMany(Estudio::class);
    }
    public function admins(){
        return $this->belongsTo(Admin::class);
    }
}
