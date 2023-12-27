<?php

include "./ContaBancaria.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["conta"]) && isset($_GET["titular"]) && isset($_GET["saldo"])) {

    $conta = new ContaBancaria($_GET["conta"], $_GET["titular"], $_GET["saldo"]);

    if (isset($_GET["valorDeposito"])) {
        $valorDeposito = $_GET["valorDeposito"];
        $conta->deposito($valorDeposito);
    }

    if (isset($_GET["valorSaque"])) {
        $valorSaque = $_GET["valorSaque"];
        $conta->saque($valorSaque);
    }

    echo "Saldo atual: " . $conta->getSaldo();
} else {
    echo "Faltam informações.";
}
