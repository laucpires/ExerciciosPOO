<?php

include "./Triangulo.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["lado1"]) && isset($_GET["lado2"]) && isset($_GET["lado3"])) {
    $triangulo = new Triangulo($_GET["lado1"], $_GET["lado2"], $_GET["lado3"]);

    echo "Situação do triângulo: " . $triangulo->verificaTriangulo($_GET["lado1"], $_GET["lado2"], $_GET["lado3"]) . "<br>";
    echo "Área do triângulo: " . $triangulo->calculaAreaTriangulo($_GET["lado1"], $_GET["lado2"], $_GET["lado3"]) . "<br>";
    echo "Tipo do triângulo: " . $triangulo->verificaTipo($_GET["lado1"], $_GET["lado2"], $_GET["lado3"]) . "<br>";
} else {
    echo "Faltam informações.";
}
