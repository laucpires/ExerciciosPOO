<!-- 5. Crie uma classe chamada “Funcionário” com atributos para armazenar o nome, o salário e o cargo do funcionário. 
Implemente métodos para calcular o salário líquido, considerando descontos de impostos e benefícios. -->

<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $cargo;

    public function __construct($nome, $salario, $cargo)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function calculaSalarioLiquido()
    {
        $imposto = ($this->salario * 10) / 100;
        $beneficio = ($this->salario * 1.5) / 100;

        $salarioLiquido = $this->salario - $imposto + $beneficio;
        return $salarioLiquido;
    }
}
