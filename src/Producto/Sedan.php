<?php

namespace App\src\Producto;

class Sedan implements Auto
{
    public function obtenerTipo(): string
    {
        return "Sedan";
    }
}