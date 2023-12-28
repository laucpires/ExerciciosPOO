<?php

include "./Paciente.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nome"]) && isset($_GET["idade"]) && isset($_GET["historicoConsultas"])) {
    $paciente = new Paciente($_GET["nome"], $_GET["idade"], $_GET["historicoConsultas"]);

    $paciente->addNovaConsulta("Consulta 1");
    $paciente->addNovaConsulta("Consulta 2");

    $consultas = $paciente->consultasRealizadas();
    foreach ($consultas as $consulta) {
        echo $consulta . "<br>";
    }
}
