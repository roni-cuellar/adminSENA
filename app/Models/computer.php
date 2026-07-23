<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'brand'];

    public function apprentices(){
        return $this->hasOne(apprentice::class);
    }

}
