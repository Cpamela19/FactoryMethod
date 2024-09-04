<?php

require __DIR__ . '/../vendor/autoload.php';

use App\src\Creador\CreadorDeportivo;
use App\src\Creador\CreadorSedan;
use App\src\Creador\CreadorSUV;

function clienteCode($creador)
{
    echo $creador->crearProducto() . PHP_EOL;
}

$creadorEBook = new CreadorSUV();
clienteCode($creadorEBook); // Salida: Creando un SUV

$creadorAudioBook = new CreadorSedan();
clienteCode($creadorAudioBook); // Salida: Creando un Sedan

$creadorDeportivo = new CreadorDeportivo();
clienteCode($creadorDeportivo); // Salida: Creando un Deportivo