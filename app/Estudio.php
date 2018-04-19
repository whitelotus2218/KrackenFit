<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    public function atletums(){
    	return $this->belongsTo(Atletum::class);
    }
    public function employees(){
    	return $this->belongsTo(Employee::class);
    }
}
