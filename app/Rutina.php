<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    public function atletums(){
    	return $this->belongsTo(Atletum::class);
    }
    public function ejercicios(){
    	return $this->hasMany(Ejercicio::class);
    }
    public function employees(){
    	return $this->belongsTo(Employee::class);
    }
}
