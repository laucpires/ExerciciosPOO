<!-- 9. Crie uma classe chamada “Paciente” que possua atributos para armazenar o nome, a idade e o histórico de consultas de um paciente. 
Implemente métodos para adicionar uma nova consulta ao histórico e exibir as consultas realizadas. -->

<?php

class Paciente {
    public $nome;
    public $idade;
    public $historicoConsultas;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->historicoConsultas = [];
    }

    public function addNovaConsulta($nomeConsulta)
    {
        $this->historicoConsultas[] = $nomeConsulta;
    }

    public function consultasRealizadas()
    {
        foreach ($this->historicoConsultas as $consulta) {
            echo $consulta;
        }
    }
}
