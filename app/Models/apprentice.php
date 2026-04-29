<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprentice extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos (Inversa) con Course
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

    //Relacion Uno a Muchos (Inversa) con Computer
    public function computer(){
        return $this->belongsTo('App\Models\Computer');
    }
    
}
