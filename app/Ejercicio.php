<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    public function rutinas(){
    	return $this->belongsTo(Rutina::class);
    }
}
