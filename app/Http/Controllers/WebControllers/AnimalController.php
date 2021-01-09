<?php

namespace App\Http\Controllers\WebControllers;

use App\Animal;
use App\Corral;
use App\Http\Requests\AnimalRequest;
use App\TipoAnimal;
use Illuminate\Http\Request;

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
        return view('animales.index', ['animales' => $animales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $corrales = Corral::all();
        $tipos_animales = TipoAnimal::all();

        return view('animales.create', [
            'corrales' => $corrales,
            'tipos_animales' => $tipos_animales
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimalRequest $request)
    {
        Animal::create([
            'corral_id' => $request->corral,
            'id_tipo_animal' => $request->tipo_animal,
            'nombre'=>$request->nombre,
            'edad'=>$request->edad
        ]);
        return redirect(route('animal.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $corrales = Corral::all();
        $tipos_animales = TipoAnimal::all();
        $animal = Animal::with(['corral','tipo_animal'])->findOrFail($id);

        return view('animales.edit', [
            'corrales' => $corrales,
            'tipos_animales' => $tipos_animales,
            'animal' => $animal,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnimalRequest $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->corral_id=$request->corral;
        $animal->id_tipo_animal=$request->tipo_animal;
        $animal->nombre=$request->nombre;
        $animal->edad=$request->edad;
        $animal->save();
        return back();
    }

}
