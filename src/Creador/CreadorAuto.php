<?php

namespace App\src\Creador;

use App\src\Producto\Auto;

abstract class CreadorAuto
{
    // El Factory Method
    abstract public function crearAuto(): Auto;

    // Método que utiliza el Factory Method
    public function crearProducto()
    {
        $producto = $this->crearAuto();

        return "Creando un " . $producto->obtenerTipo();
    }
}