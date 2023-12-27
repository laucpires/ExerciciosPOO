<!-- 2. Implemente uma classe chamada “ContaBancária” que possua atributos para armazenar o número da conta, nome do titular e saldo. 
Adicione métodos para realizar depósitos e saques. -->

<?php

class ContaBancaria
{
    private $conta;
    private $titular;
    private $saldo;

    public function __construct($conta, $titular, $saldo)
    {
        $this->conta = $conta;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function getConta()
    {
        return $this->conta;
    }

    public function setConta($conta)
    {
        $this->conta = $conta;
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function deposito($valorDeposito)
    {
        if ($valorDeposito > 0) {
            $this->saldo += $valorDeposito;
        }
        else {
            echo "Impossível fazer depósito menor que 0. <br>";
        }
    }

    public function saque($valorSaque)
    {
        if ($valorSaque > $this->saldo) {
            echo "Impossível fazer saque maior que saldo atual. <br>";
        }
        else {
            $this->saldo -= $valorSaque;
        }
    }
}
