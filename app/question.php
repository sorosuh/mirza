<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class question extends Model
{
    use SoftDeletes;
    protected $date=['deleted-at'];

    protected $fillable=[
        'dificultu',
        'major',
        'title',
        'code',
        'link',
        'price',
        'new_price',
    ];

    public function users(){
        return $this->belongsToMany(User::class);

    }

    public function answers(){
        return $this->hasMany(answer::class);
    }
}
