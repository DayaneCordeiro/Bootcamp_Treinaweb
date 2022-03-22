<?php

declare(strict_types=1);

namespace App\Modelo;

class Cliente
{
    // nova forma de trabalhar com construtor depois do PHP 8
    // não precisa declarar os atributos e nem preencher o corpo do costrutor
    // basta encapsular
    public function __construct(public string $name)
    {
    }
}