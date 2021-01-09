<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animales';

    public function corral(){
        return $this->hasOne('Corral','id','id_corral');
    }

    public function tipo_animal(){
        return $this->hasOne('TipoAnimal','id','id_tipo_animal');
    }
}
