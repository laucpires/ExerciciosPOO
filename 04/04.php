<?php

include "./Aluno.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nome"]) && isset($_GET["matricula"]) && isset($_GET["nota1"]) && isset($_GET["nota2"]) && isset($_GET["nota3"])) {
    $aluno = new Aluno($_GET["nome"], $_GET["matricula"], [$_GET["nota1"], $_GET["nota2"], $_GET["nota3"]]);

    echo "Situação: " . $aluno->verificaSituacao() . "<br>";
} else {
    echo "Faltam informações.";
}
