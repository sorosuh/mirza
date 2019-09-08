<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class master extends Model
{
    use HasApiTokens;

    public function classrooms(){
        return $this->hasMany(classroom::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function questions(){
        return $this->hasMany(question::class);
    }
}
