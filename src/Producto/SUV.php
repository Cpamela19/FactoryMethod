<?php

namespace App\src\Producto;

class SUV implements Auto
{
    public function obtenerTipo(): string
    {
        return "SUV";
    }
}