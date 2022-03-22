<?php

require_once('vendor/autoload.php');

use App\Controlador\Diaria;

$diariaControlador = new Diaria();
$diariaControlador->listar();

