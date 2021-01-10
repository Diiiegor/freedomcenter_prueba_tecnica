<?php

if (!function_exists('edad_promedio')) {
    function edad_promedio($id_corral)
    {
        $corral = \App\Corral::with('animales')->findOrFail($id_corral);
        $promedio = $corral->animales->avg('edad');
        return round($promedio);
    }
}
