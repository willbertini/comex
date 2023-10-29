<?php

namespace Willian\Comex\Classes;

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
        $this->qtdEstoque -= $quantidade;
    }

    public function repoe(int $quantidade = 1 )
    {
        $this->qtdEstoque += $quantidade;
    }




}