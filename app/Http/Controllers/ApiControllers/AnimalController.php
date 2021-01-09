<?php

namespace App\Http\Controllers\ApiControllers;

use App\Animal;
use App\Http\Requests\ApiAnimalRequest;


class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animales = Animal::with(['corral', 'tipo_animal'])->paginate(10);
        return response()->json($animales, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApiAnimalRequest $request)
    {
        Animal::create([
            'corral_id' => $request->corral,
            'id_tipo_animal' => $request->tipo_animal,
            'nombre' => $request->nombre,
            'edad' => $request->edad
        ]);
        return response()->json(['data' => ['resp' => 'Animal creado correctamente']], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApiAnimalRequest $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->corral_id = $request->corral;
        $animal->id_tipo_animal = $request->tipo_animal;
        $animal->nombre = $request->nombre;
        $animal->edad = $request->edad;
        $animal->save();
        return response()->json(['data' => ['resp' => 'Animal actualizado correctamente']], 200);
    }

    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return response()->json(['data' => $animal], 200);
    }

}
