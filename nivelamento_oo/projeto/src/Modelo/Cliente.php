<?php

namespace App\Modelo;

class Cliente
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}