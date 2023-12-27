<!-- 7. Crie uma classe chamada “Triângulo” com atributos para armazenar os três lados do triângulo. 
Implemente métodos para verificar se é um triângulo válido e calcular sua área. -->

<?php

class Triangulo
{
    public $lado1;
    public $lado2;
    public $lado3;

    public function __construct($lado1, $lado2, $lado3)
    {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function verificaTriangulo($lado1, $lado2, $lado3)
    {
        if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
            return "É possível formar um triângulo com essas medidas.";
        } else {
            return "Não é possível formar um triângulo com essas medidas.";
        }
    }

    public function calculaAreaTriangulo($lado1, $lado2, $lado3)
    {
        $semiperimetro = ($lado1 + $lado2 + $lado3) / 2;

        // Calcula a área usando a fórmula de Heron
        $area = sqrt($semiperimetro * ($semiperimetro - $lado1) * ($semiperimetro - $lado2) * ($semiperimetro - $lado3));
        return round($area, 2);
    }

    public function verificaTipo($lado1, $lado2, $lado3)
    {
        if ($lado1 == $lado2 && $lado2 == $lado3)
            return "Triângulo equilátero: todos os lados são iguais.";
        elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3)
            return "Triângulo isósceles: dois lados são iguais.";
        else
            return "Triângulo escaleno: todos os lados são diferentes.";
    }
}
