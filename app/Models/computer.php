<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    use HasFactory;

    public function apprentices(){
        return $this->hasOne('App\Models\Apprentice');
    }

}
