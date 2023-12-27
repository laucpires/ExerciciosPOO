<!-- 6. Implemente uma classe chamada “Produto” que possua atributos para armazenar o nome, o preço e a quantidade em estoque. 
Adicione métodos para calcular o valor total em estoque e verificar se o produto está disponível. -->

<?php

class Produto {
    public $nome;
    public $preco;
    public $qtdEstoque;

    public function __construct($nome, $preco, $qtdEstoque)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->qtdEstoque = $qtdEstoque;
    }

    public function calculaVTEstoque()
    {
        return $this->preco * $this->qtdEstoque;
    }

    public function estaDisponivel()
    {
        return $this->qtdEstoque > 0;
    }
}
