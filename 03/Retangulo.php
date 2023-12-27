<!-- 3. Crie uma classe chamada “Retângulo” que possua atributos para armazenar a largura e a altura. 
Implemente métodos para calcular a área e o perímetro do retângulo. -->

<?php

class Retangulo
{
    public $largura;
    public $altura;

    public function __construct($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calculaArea($largura, $altura)
    {
        $area = $largura * $altura;
        return $area;
    }

    public function calculaPerimetro($largura, $altura)
    {
        $perimetro = ($largura * 2) + ($altura * 2);
        return $perimetro;
    }
}
