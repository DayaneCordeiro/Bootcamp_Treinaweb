<?php

abstract class Atendimento
{
    // classe abstrata não pode ser instanciada, só pode ser herdada
    public $data;
    private $tempo;
    protected $valor;

    public function definirTempo($tempo)
    {
        if ($tempo < 1) {
            echo "Não é permitido adicionar tempo menor que 1.";
            return;
        }

        $this->tempo = $tempo;
    }
}

class Diarista extends Atendimento
{
    public function definirValor($valor)
    {
        $this->valor = $valor;
    }
}