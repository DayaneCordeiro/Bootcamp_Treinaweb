<?php

class Cliente
{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    // se der um echo em um objeto dessa classe, imprime sem dar erro
    public function __toString()
    {
        echo "Nome do cliente: " . $this->nome;
    }

    // permite chamar o objeto como se fosse uma função
    public function __invoke()
    {
        return $this->nome;
    }
}

$cliente = new Cliente("Dayane");
echo $cliente; // não da erro por causa do toString()
echo $cliente(); // não da erro por causa do invoke()