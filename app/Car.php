<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //to allow Car::create and Car::update
    protected $fillable = ['make', 'model', 'year'];
}
