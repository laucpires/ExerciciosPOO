<!-- 4. Implemente uma classe chamada “Aluno” que possua atributos para armazenar o nome, a matrícula e as notas de um aluno. 
Adicione métodos para calcular a média das notas e verificar a situação do aluno (aprovado ou reprovado). -->

<?php

class Aluno {
    public $nome;
    public $matricula;
    public $notas;

    public function __construct($nome, $matricula, $notas = [])
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->notas = $notas;
    }

    public function pegaNotas($nota1, $nota2, $nota3)
    {
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $nota3 = $_GET["nota3"];

        $this->notas = [$nota1, $nota2, $nota3];
    }

    public function calculaMedia()
    {
        $media = array_sum($this->notas) / count($this->notas);
        return $media;
    }

    public function verificaSituacao()
    {
        $media = $this->calculaMedia();
        if ($media >= 6.0) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
}
