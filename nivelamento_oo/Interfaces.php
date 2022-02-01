<?php

// interfaces são contratos
// toda classe que implementar uma interface é obrigada a também implementar seus métodos
interface Saldo
{
    public function depositar($saldo);
    public function sacar($saldo);
}

class Cliente implements Saldo
{
    private $saldo;

    /**
     * Undocumented function
     *
     * @param  double $saldo
     * @return void
     */
    public function depositar($saldo)
    {
        $this->saldo = $this->saldo + ($saldo * 1.1);
    }

    /**
     * Undocumented function
     *
     * @param  double $saldo
     * @return void
     */
    public function sacar($saldo)
    {
        $this->saldo = $this->saldo - $saldo;
    }
}

class Diarista implements Saldo
{
    private $saldo;

    /**
     * Undocumented function
     *
     * @param  double $saldo
     * @return void
     */
    public function depositar($saldo)
    {
        $this->saldo = $this->saldo + $saldo;
    }

    /**
     * Undocumented function
     *
     * @param  double $saldo
     * @return void
     */
    public function sacar($saldo)
    {
        $this->saldo = $this->saldo - $saldo;
    }
}