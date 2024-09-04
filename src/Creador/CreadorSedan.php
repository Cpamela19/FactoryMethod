<?php

namespace App\src\Creador;

use App\src\Producto\Sedan;
use App\src\Producto\Auto;

class CreadorSedan extends CreadorAuto
{
    public function crearAuto(): Auto
    {
        return new Sedan();
    }
}