<?php

include "./Funcionario.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nome"]) && isset($_GET["salario"]) && isset($_GET["cargo"])) {
    $funcionario = new Funcionario($_GET["nome"], $_GET["salario"], $_GET["cargo"]);

    echo "Salário líquido: " . $funcionario->calculaSalarioLiquido() . "<br>";
} else {
    echo "Faltam informações.";
}
