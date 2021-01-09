<?php

namespace App\Http\Controllers\ApiControllers;

use App\Corral;
use App\Http\Requests\ApiCorralRequest;
use App\Http\Controllers\Controller;

class CorralController extends Controller
{

    public function index()
    {
        $corrales = Corral::paginate(10);
        return response()->json($corrales, 200);
    }


    public function store(ApiCorralRequest $request)
    {
        Corral::create([
            'nombre' => $request->nombre,
            'capacidad_maxima' => $request->capacidad_maxima
        ]);
        return response()->json(['data' => ['resp' => 'Corral creado correctamente']]);
    }


    public function update(ApiCorralRequest $request, $id)
    {
        $corral = Corral::findOrFail($id);
        $corral->nombre = $request->nombre;
        $corral->capacidad_maxima = $request->capacidad_maxima;
        $corral->save();
        return response()->json(['data' => ['resp' => 'Corral actualizado correctamente']]);
    }

    public function show($id){
        $corral = Corral::findOrFail($id);
        return response()->json(['data'=>$corral],200);
    }

}
