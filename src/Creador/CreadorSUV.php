<?php

namespace App\src\Creador;

use App\src\Producto\SUV;
use App\src\Producto\Auto;

class CreadorSUV extends CreadorAuto
{
    public function crearAuto(): Auto
    {
        return new SUV();
    }
}