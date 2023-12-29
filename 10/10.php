<?php

include "./Livro.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $titulo = $_GET["titulo"];
    $autor = $_GET["autor"];
    $acao = $_GET["acao"];
    
    $livro = new Livro($titulo, $autor, 555);

    switch ($acao) {
        case "emprestar":
            $resultado = $livro->emprestarLivro();
            break;
        case "devolver":
            $resultado = $livro->devolverLivro();
            break;
        case "verificar":
            $disponivel = $livro->estaDisponivel();
            $resultado = $disponivel ? "O livro está disponível." : "O livro não está disponível.";
            break;
        default:
            $resultado = "Ação inválida.";
    }

    echo $resultado;
}
