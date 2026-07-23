<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'area_id', 'training_center_id'];

    //Relacion Uno a Muchos (Inversa) con Area
    public function area(){
        return $this->belongsTo(area::class);
    }

    //Relacion Uno a Muchos (Inversa) con TrainingCenter
    public function trainingCenter(){
        return $this->belongsTo(training_center::class);
    }

    //Relacion Muchos a Muchos con Course
    public function courses(){
        return $this->belongsToMany(course::class);
    }
    
}
