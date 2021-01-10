<?php

namespace App\Http\Controllers;

use App\Corral;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $corrales = \App\Corral::all();
        $animales = isset($corrales[0]->id)?\App\Animal::with('tipo_animal')->where('corral_id',$corrales[0]->id)->get():[];
        return view('welcome',['corrales'=>$corrales,'animales'=>$animales]);
    }

}
