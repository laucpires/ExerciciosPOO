<!-- 9. Crie uma classe chamada “Paciente” que possua atributos para armazenar o nome, a idade e o histórico de consultas de um paciente. 
Implemente métodos para adicionar uma nova consulta ao histórico e exibir as consultas realizadas. -->

<?php

class Paciente {
    public $nome;
    public $idade;
    public $historicoConsultas;

    public function __construct($nome, $idade, $historicoConsultas = [])
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->historicoConsultas = $historicoConsultas;
    }

    public function addNovaConsulta($nomeConsulta)
    {
        $this->historicoConsultas[] = $nomeConsulta;
    }

    public function consultasRealizadas()
    {
        return $this->historicoConsultas;
    }
}
