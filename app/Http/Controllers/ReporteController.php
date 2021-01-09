<?php

namespace App\Http\Controllers;

use App\Corral;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class ReporteController extends Controller
{
    public function __invoke()
    {
        $corrales = Corral::with('animales')->get();
        $pdf = \PDF::loadView('reportes.reporte', ['corrales' => $corrales]);
        return $pdf->stream('archivo.pdf');
    }
}