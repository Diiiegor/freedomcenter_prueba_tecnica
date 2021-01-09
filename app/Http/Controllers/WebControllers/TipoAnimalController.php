<?php

namespace App\Http\Controllers\WebControllers;

use App\Animal;
use App\Http\Requests\TipoAnimalRequest;
use App\TipoAnimal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TipoAnimalController extends Controller
{

    public function index()
    {
        $tipos_animales = TipoAnimal::paginate(10);
        return view('tipo_animal.index', ['tipos_animales' => $tipos_animales]);
    }


    public function create()
    {
        return view('tipo_animal.create');
    }


    public function store(TipoAnimalRequest $request)
    {
        TipoAnimal::create(['nombre' => $request->nombre]);
        return redirect(route('tipo_animal.index'));
    }


    public function edit($id)
    {
        $tipo_animal = TipoAnimal::findOrFail($id);
        return view('tipo_animal.edit', ['tipo_animal' => $tipo_animal]);
    }


    public function update(TipoAnimalRequest $request, $id)
    {
        $tipo_animal = TipoAnimal::findOrFail($id);
        $tipo_animal->nombre = $request->nombre;
        $tipo_animal->save();
        return back();
    }

}
