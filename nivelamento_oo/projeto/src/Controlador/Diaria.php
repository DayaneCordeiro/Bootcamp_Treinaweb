<?php

namespace App\Controlador;
use App\Modelo\Diaria as DiariaModelo;

class Diaria
{
    public function listar()
    {
        $diarias = DiariaModelo::obterTodas();

       require_once(__DIR__ . '/../../visualizacao/listar_diarias.php');
    }
}