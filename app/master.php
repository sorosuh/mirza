<?php

namespace App;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class master extends Authenticatable
{
    use HasApiTokens, Notifiable;


    protected $table = 'masters';

    protected $fillable=[
        'name','family','password',
    ];

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
