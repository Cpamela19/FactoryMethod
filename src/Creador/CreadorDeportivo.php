<?php

namespace App\src\Creador;

use App\src\Producto\Auto;
use App\src\Producto\Deportivo;

class CreadorDeportivo extends CreadorAuto
{
    public function crearAuto(): Auto
    {
        return new Deportivo();
    }
}