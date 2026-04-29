<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos (Inversa) con Area
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    //Relacion Uno a Muchos (Inversa) con TrainingCenter
    public function trainingCenter(){
        return $this->belongsTo('App\Models\TrainingCenter');
    }

    //Relacion Muchos a Muchos con Teacher
    public function teachers(){
        return $this->belongsToMany('App\Models\Teacher');
    }

    //Relacion Uno a Muchos con Apprentice
    public function apprentices(){
        return $this->hasMany('App\Models\Apprentice');
    }
    
}
