<?php

include "./Produto.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nome"]) && isset($_GET["preco"]) && isset($_GET["nome"])) {
    $produto = new Produto($_GET["nome"], $_GET["preco"], $_GET["qtdEstoque"]);

    echo "Valor total em estoque do produto: " . $produto->calculaVTEstoque() . "<br>";
    if ($produto->estaDisponivel())
        echo "Produto disponível em estoque. <br>";
    else
        echo "Produto não disponível em estoque. <br>";
} else {
    echo "Faltam informações.";
}
