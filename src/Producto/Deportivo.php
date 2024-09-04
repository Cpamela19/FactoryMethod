<?php

namespace App\src\Producto;

class Deportivo implements Auto
{
    public function obtenerTipo(): string
    {
        return "Deportivo";
    }
}
