<?php

declare(strict_types=1);

namespace App\Modelo;

class Diaria
{

    public function __construct(
        public string $data, public int $tempo, public Diarista $diarista, public Cliente $cliente)
    {
    }

    /**
     * @return Diaria[]
     */
    public static function obterTodas()
    {
        return [
            new self("20/10/2021", 8, new Diarista("João"), new Cliente("Maria")),
            new self("21/10/2021", 4, new Diarista("Pedro"), new Cliente("Elton")),
            new self("22/10/2021", 6, new Diarista("Luciane"), new Cliente("Daniel"))
        ];
    }
}