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

// Como chama a função depositar dentro dessa função, passar a interface Saldo por parâmetro
// garante que independente se for deposito pra cliente ou diarista, o método depositar vai existir
// já que ambos implementam Saldo. Isso permite chamar uma função polimorfica sem nenhum problema.
function realizaAcaoDepositar(Saldo $pessoa, $valor)
{
    $pessoa->depositar($valor);
}

$cliente = new Cliente();
realizaAcaoDepositar($cliente, 500);

$diarista = new Diarista();
realizaAcaoDepositar($diarista, 700);

var_dump($cliente, $diarista);