<?php

namespace App\Http\Controllers\WebControllers;

use App\Animal;
use App\Http\Requests\TipoAnimalRequest;
use App\TipoAnimal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TipoAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_animales = TipoAnimal::paginate(10);
        return view('tipo_animal.index', ['tipos_animales' => $tipos_animales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoAnimalRequest $request)
    {
        TipoAnimal::create(['nombre' => $request->nombre]);
        return redirect(route('tipo_animal.index'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_animal = TipoAnimal::findOrFail($id);
        return view('tipo_animal.edit', ['tipo_animal' => $tipo_animal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoAnimalRequest $request, $id)
    {
        $tipo_animal = TipoAnimal::findOrFail($id);
        $tipo_animal->nombre = $request->nombre;
        $tipo_animal->save();
        return back();
    }

}
