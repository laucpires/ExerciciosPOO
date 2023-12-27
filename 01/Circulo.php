<!-- 1. Crie uma classe chamada “Círculo” que possua um atributo para armazenar o raio e métodos para calcular a área e o perímetro do círculo. -->

<?php

class Circulo
{
    public $raio;

    public function __construct($raio)
    {
        $this->raio = $raio;
    }

    public function calculaArea()
    {
        $areaCirculo = pi() * ($this->raio ** 2);
        return $areaCirculo;
    }

    public function calculaPerimetro()
    {
        $perimetroCirculo = 2 * pi() * $this->raio;
        return $perimetroCirculo;
    }
}
