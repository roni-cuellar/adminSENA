<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
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

    //Relacion Muchos a Muchos con Course
    public function courses(){
        return $this->belongsToMany('App\Models\Course');
    }
    
}
