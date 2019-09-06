<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    public function users(){
        return  $this->belongsToMany(User::class);
     }

     public function master(){
         return $this->hasOne(master::class);
     }


}
