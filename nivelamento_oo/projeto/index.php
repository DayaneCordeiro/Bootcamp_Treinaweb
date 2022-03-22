<?php

require_once('vendor/autoload.php');

use App\Controlador\Diarista;
use App\Modelo\Diarista as DiaristaModelo;
use App\Modelo\Cliente;
use App\Modelo\Diaria;

$d = new Diarista();

$diarista = new DiaristaModelo();
$diarista->name = "João";

$cliente = new Cliente();
$cliente->name = "Maria";

$diaria = new Diaria('21/03/2022', 8, $diarista, $cliente);

var_dump($diaria);

