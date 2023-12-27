<?php

include "./Retangulo.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["largura"]) && isset($_GET["altura"])) {
    $retangulo = new Retangulo($_GET["largura"], $_GET["altura"]);

    echo "Área do retângulo: " . $retangulo->calculaArea($_GET["largura"], $_GET["altura"]) . "<br>";
    echo "Perímetro do retângulo: " . $retangulo->calculaPerimetro($_GET["largura"], $_GET["altura"]) . "<br>";
} else {
    echo "Faltam informações.";
}
