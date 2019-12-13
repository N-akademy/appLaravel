<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['name','gender','age','weight','size','breed_id'];
    public function breed()
    {
        return $this->belongsTo('App\Breed');
    }
}
