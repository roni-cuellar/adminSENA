<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //Relacion Uno a Muchos con Teacher
    public function teachers(){
        return $this->hasMany(teacher::class);
    }

    //Relacion Uno a Muchos con Course
    public function courses(){
        return $this->hasMany(course::class);
    }
}
