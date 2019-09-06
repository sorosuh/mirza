<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $fillable = [
        'name',
        'family',
        'email',
        'phone',
        'major' ,
        'password'
];


    public function questions(){
    return  $this->belongsToMany(question::class);
    }

    public function classrooms(){
        return $this->belongsToMany(classroom::class);
    }

    public function contacts(){
        return $this->hasMany(contact::class);
    }

    public function transactions(){
    return $this->hasMany(transaction::class);
    }

    public function masters(){
        return $this->belongsToMany(master::class);
    }

}
