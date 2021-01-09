<?php

namespace App\Http\Controllers\WebControllers;

use App\Animal;
use App\Corral;
use App\Http\Requests\AnimalRequest;
use App\TipoAnimal;
use App\Http\Controllers\Controller;

class AnimalController extends Controller
{

    public function index()
    {
        $animales = Animal::with(['corral', 'tipo_animal'])->paginate(10);
        return view('animales.index', ['animales' => $animales]);
    }


    public function create()
    {
        $corrales = Corral::all();
        $tipos_animales = TipoAnimal::all();

        return view('animales.create', [
            'corrales' => $corrales,
            'tipos_animales' => $tipos_animales
        ]);
    }


    public function store(AnimalRequest $request)
    {
        Animal::create([
            'corral_id' => $request->corral,
            'id_tipo_animal' => $request->tipo_animal,
            'nombre' => $request->nombre,
            'edad' => $request->edad
        ]);
        return redirect(route('animal.index'));
    }


    public function edit($id)
    {
        $corrales = Corral::all();
        $tipos_animales = TipoAnimal::all();
        $animal = Animal::with(['corral', 'tipo_animal'])->findOrFail($id);

        return view('animales.edit', [
            'corrales' => $corrales,
            'tipos_animales' => $tipos_animales,
            'animal' => $animal,
        ]);
    }


    public function update(AnimalRequest $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->corral_id = $request->corral;
        $animal->id_tipo_animal = $request->tipo_animal;
        $animal->nombre = $request->nombre;
        $animal->edad = $request->edad;
        $animal->save();
        return back();
    }

}
