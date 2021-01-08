<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corral extends Model
{
    protected $table='corrales';
    protected $fillable=['nombre','capacidad_maxima'];
}
