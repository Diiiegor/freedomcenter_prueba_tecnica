<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Requests\ApiTipoAnimalRequest;
use App\Http\Controllers\Controller;
use App\TipoAnimal;

class TipoAnimalController extends Controller
{

    public function index()
    {
        $tipos_animales = TipoAnimal::paginate(10);
        return response()->json($tipos_animales,200);
    }




    public function store(ApiTipoAnimalRequest $request)
    {
        TipoAnimal::create(['nombre' => $request->nombre]);
        return response()->json(['resp'=>'Tipo de animal creado correctamente'],200);
    }


    public function show($id){
        $tipoAnimal = TipoAnimal::findOrFail($id);
        return response()->json(['data'=>$tipoAnimal],200);
    }



    public function update(ApiTipoAnimalRequest $request, $id)
    {
        $tipo_animal = TipoAnimal::findOrFail($id);
        $tipo_animal->nombre = $request->nombre;
        $tipo_animal->save();
        return response()->json(['resp'=>'Tipo de animal actualizado correctamente'],200);
    }

}
