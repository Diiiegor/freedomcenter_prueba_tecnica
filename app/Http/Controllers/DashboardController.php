<?php

namespace App\Http\Controllers;

use App\Corral;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $corrales = \App\Corral::all();
        $animales = $corrales[0]->id?\App\Animal::all()->where('corral_id',$corrales[0]->id):[];
        return view('welcome',['corrales'=>$corrales,'animales'=>$animales]);
    }

}
