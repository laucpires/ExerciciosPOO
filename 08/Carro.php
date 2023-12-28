<!-- 8. Implemente uma classe chamada “Carro” com atributos para armazenar a marca, o modelo e a velocidade atual do carro. 
Adicione métodos para acelerar, frear e exibir a velocidade atual. -->

<?php

class Carro {
    public $marca;
    public $modelo;
    public $velocidade;

    public function __construct($marca, $modelo, $velocidade)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function acelerar($aumento)
    {
        $this->velocidade += $aumento;
    }

    public function frear($diminuicao)
    {
        $this->velocidade -= $diminuicao;
    }

    public function exibirVelocidade()
    {
        return $this->velocidade;
    }
}
