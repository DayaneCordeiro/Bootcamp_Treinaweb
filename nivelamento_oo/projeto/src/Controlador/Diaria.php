<?php

declare(strict_types=1);

namespace App\Controlador;
use App\Modelo\Diaria as DiariaModelo;

class Diaria
{
    /**
     * @return void
     */
    public function listar()
    {
        $diarias = DiariaModelo::obterTodas();

       require_once(__DIR__ . '/../../visualizacao/listar_diarias.php');
    }
}