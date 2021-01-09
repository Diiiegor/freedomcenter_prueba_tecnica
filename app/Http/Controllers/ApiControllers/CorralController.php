<?php

namespace App\Http\Controllers\ApiControllers;

use App\Corral;
use App\Http\Requests\CorralRequest;
use App\Http\Controllers\Controller;

class CorralController extends Controller
{

    public function index()
    {
        $corrales = Corral::paginate(10);
        return view('corrales.index', ['corrales' => $corrales]);
    }


    public function create()
    {
        return view('corrales.create');
    }


    public function store(CorralRequest $request)
    {
        Corral::create([
            'nombre'=>$request->nombre,
            'capacidad_maxima'=>$request->capacidad_maxima
        ]);
        return redirect(route('corral.index'));
    }




    public function edit($id)
    {
        $corral = Corral::findOrFail($id);
        return view('corrales.edit',['corral'=>$corral]);
    }


    public function update(CorralRequest $request, $id)
    {
        $corral = Corral::findOrFail($id);
        $corral->nombre=$request->nombre;
        $corral->capacidad_maxima=$request->capacidad_maxima;
        $corral->save();
        return back();
    }

}
