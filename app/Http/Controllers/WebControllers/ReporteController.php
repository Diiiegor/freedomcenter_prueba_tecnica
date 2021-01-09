<?php

namespace App\Http\Controllers\WebControllers;

use App\Corral;
use App\Http\Controllers\Controller;


class ReporteController extends Controller
{
    public function __invoke()
    {
        $corrales = Corral::with('animales')->get();
        $pdf = \PDF::loadView('reportes.reporte', ['corrales' => $corrales]);
        return $pdf->stream('archivo.pdf');
    }
}
