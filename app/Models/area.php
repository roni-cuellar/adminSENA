<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    use HasFactory;

    // app/Models/area.php
    protected $fillable = ['name'];

    //Relacion Uno a Muchos con Teacher
    public function teachers(){
        return $this->hasMany('App\Models\Teacher');
    }

    //Relacion Uno a Muchos con Course
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
