<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class classroom extends Model
{
    use HasApiTokens;

    public function users(){
        return  $this->belongsToMany(User::class);
     }

     public function master(){
         return $this->hasOne(master::class);
     }


}
