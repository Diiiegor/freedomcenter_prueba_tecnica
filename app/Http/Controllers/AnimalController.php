<?php

namespace App\Http\Controllers;

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
            'nombre'=>$request->nombre
        ]);
        return redirect(route('animal.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
