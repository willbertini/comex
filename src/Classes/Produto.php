<?php

namespace Willian\Comex\Classes;

use Exception;

class Produto
{
    public function __construct(
        private string $nome,
        private float $preco,
        private int $qtdEstoque
    ){
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getQtdEstoque()
    {
        return $this->qtdEstoque;
    }

    public function getValorTotalEstoqye()
    {
        return $this->preco * $this->qtdEstoque;
    }

    public function setPreco(float $valor)
    {
        $this->preco = $valor;
    }

    public function compra(int $quantidade = 1)
    {
        if ($quantidade < 0) {
            throw new \InvalidArgumentException("A quantidade de compra não pode ser negativa!");
        }

        if ($quantidade > $this->qtdEstoque) {
            throw new Exception("A quantidade de compra não pode ser maior que a quantidade em estoque.");
        }

        $this->qtdEstoque -= $quantidade;
    }

    public function repoe(int $quantidade = 1 )
    {
        if ($quantidade < 0) {
            throw new \InvalidArgumentException("A quantidade de reposição não pode ser negativa!");
        }
        $this->qtdEstoque += $quantidade;
    }




}