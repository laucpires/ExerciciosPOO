<!-- 10. Implemente uma classe chamada “Livro” com atributos para armazenar o título, o autor e o número de páginas do livro. 
Adicione métodos para emprestar o livro, devolvê-lo e verificar se está disponível. -->

<?php

class Livro {
    public $titulo;
    public $autor;
    public $qtdPaginas;
    public $emprestado;

    public function __construct($titulo, $autor, $qtdPaginas)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->qtdPaginas = $qtdPaginas;
        $this->emprestado = false;
    }

    public function emprestarLivro()
    {
        if (!$this->emprestado) {
            $this->emprestado = true;
            return "Livro emprestado com sucesso! <br>";
        } else {
            return "Livro já está emprestado. <br>";
        }
    }

    public function devolverLivro()
    {
        if ($this->emprestado) {
            $this->emprestado = false;
            return "Livro devolvido com sucesso! <br>";
        } else {
            return "O livro já está disponível. <br>";
        }
    }

    public function estaDisponivel()
    {
        if (!$this->emprestado)
            return "Não está disponível.";
        return "Está disponível.";
    }
}
