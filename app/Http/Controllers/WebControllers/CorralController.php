<?php

namespace App\Http\Controllers\WebControllers;

use App\Corral;
use App\Http\Requests\CorralRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corrales = Corral::paginate(10);
        return view('corrales.index', ['corrales' => $corrales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('corrales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CorralRequest $request)
    {
        Corral::create([
            'nombre'=>$request->nombre,
            'capacidad_maxima'=>$request->capacidad_maxima
        ]);
        return redirect(route('corral.index'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $corral = Corral::findOrFail($id);
        return view('corrales.edit',['corral'=>$corral]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CorralRequest $request, $id)
    {
        $corral = Corral::findOrFail($id);
        $corral->nombre=$request->nombre;
        $corral->capacidad_maxima=$request->capacidad_maxima;
        $corral->save();
        return back();
    }

}
