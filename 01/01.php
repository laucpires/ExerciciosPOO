<?php

include "./Circulo.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["raio"])) {
    $circulo = new Circulo($_GET["raio"]);

    $areaCirculo = $circulo->calculaArea();
    echo "Área do círculo igual a: " . $areaCirculo . "<br>";

    $perimetroCirculo = $circulo->calculaPerimetro();
    echo "Perímetro do círculo igual a: " . $perimetroCirculo;
} else {
    echo "Raio não foi definido.";
}
