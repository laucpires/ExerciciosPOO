<?php

include "./Paciente.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nome"]) && isset($_GET["idade"])) {
    $paciente = new Paciente($_GET["nome"], $_GET["idade"]);

    $paciente->addNovaConsulta($_GET["consulta"]);
    $paciente->addNovaConsulta("Dentista");

    foreach ($paciente->historicoConsultas as $consulta)
    {
        echo $consulta . "\n";
    }
} else {
    echo "Faltam informações.";
}
