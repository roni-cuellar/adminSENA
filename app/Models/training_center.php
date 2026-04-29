<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class training_center extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos con Teacher
    public function teachers(){
        return $this->hasMany('App\Models\Teacher');
    }

    //Relacion Uno a Muchos con Course
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
    
}
