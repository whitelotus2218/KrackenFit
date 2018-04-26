<?php

namespace App;

use App\Notifications\AtletumResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Atletum extends Authenticatable
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
        'password', 'remember_token', 'estudio_id', 'rutina_id', 'admin_id',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AtletumResetPassword($token));
    }
    public function rutinas(){
        return $this->hasMany(Rutina::class);
    }
    public function estudios(){
        return $this->hasMany(Estudio::class);
    }
}
