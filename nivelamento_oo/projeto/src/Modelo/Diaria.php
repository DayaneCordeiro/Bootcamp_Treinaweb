<?php

namespace App\Modelo;

class Diaria
{
    public $data;
    public $tempo;
    public Diarista $diarista;
    public Cliente $cliente;

    public function __construct($data, $tempo, Diarista $diarista, Cliente $cliente)
    {
        $this->data = $data;
        $this->tempo = $tempo;
        $this->diarista = $diarista;
        $this->cliente = $cliente;
    }

    public static function obterTodas()
    {
        return [
            new self("20/10/2021", 8, new Diarista("João"), new Cliente("Maria")),
            new self("21/10/2021", 4, new Diarista("Pedro"), new Cliente("Elton")),
            new self("22/10/2021", 6, new Diarista("Luciane"), new Cliente("Daniel"))
        ];
    }
}