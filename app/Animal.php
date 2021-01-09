<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animales';
    protected $fillable=['corral_id', 'id_tipo_animal', 'nombre','edad'];
    const ALTA_PRELIGROSIDAD =1;

    public function corral(){
        return $this->belongsTo(Corral::class);
    }

    public function tipo_animal(){
        return $this->belongsTo(TipoAnimal::class,'id_tipo_animal','id','id_tipo_animal');
    }
}
