<?php

include "./Carro.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["marca"]) && isset($_GET["modelo"]) && isset($_GET["velocidade"])) {
    $carro = new Carro($_GET["marca"], $_GET["modelo"], $_GET["velocidade"]);

    $carro->acelerar($_GET["aceleracao"]);
    $carro->frear($_GET["diminuicao"]);

    echo "Velocidade atual: " . $carro->exibirVelocidade();
} else {
    echo "Faltam informações.";
}
