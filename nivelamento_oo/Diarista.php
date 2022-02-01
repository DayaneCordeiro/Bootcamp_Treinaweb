<?php

class Pessoa
{
    public $nome;
    public $telefone;
    public $endereço;
}

class Diarista extends Pessoa
{
    /**
     * Atende ao cliente
     *
     * @param string $nomeCliente
     * @return void
     */
    public function atenderCliente($nomeCliente)
    {
        $nomeDiarista = $this->nome;
        echo "<br>O(A) diarista $nomeDiarista atendeu ao cliente $nomeCliente.";
    }

    /**
     * Avalia o cliente
     *
     * @param string $nomeCliente
     * @param int    $nota
     * @return void
     */
    public function avaliarCliente($nomeCliente, $nota)
    {
        $this->atenderCliente($nomeCliente);
        echo "<br>Avaliou o cliente com a nota: $nota.";
    }
}

class Cliente extends Pessoa
{
    // to do
}

$diarista = new Diarista();

$diarista->nome     = "Maria da Silva";
$diarista->telefone = "123456789";
$diarista->endereço = "Rua A, 123, Nova Lima, Minas Gerais";

var_dump($diarista);