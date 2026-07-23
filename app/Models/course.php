<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable = ['course_number', 'day', 'area_id', 'training_center_id'];

    //Relacion Uno a Muchos (Inversa) con Area
    public function area(){
        return $this->belongsTo(area::class);
    }

    //Relacion Uno a Muchos (Inversa) con TrainingCenter
    public function trainingCenter(){
        return $this->belongsTo(training_center::class);
    }

    //Relacion Muchos a Muchos con Teacher
    public function teachers(){
        return $this->belongsToMany(teacher::class);
    }

    //Relacion Uno a Muchos con Apprentice
    public function apprentices(){
        return $this->hasMany(apprentice::class);
    }
    
}
