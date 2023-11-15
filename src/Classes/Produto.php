<?php

namespace Willian\Comex\Classes;

use Exception;
use InvalidArgumentException;
use Willian\Comex\Exceptions\CompraMaiorQueEstoque;

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

    public function getValorTotalEstoque()
    {
        return $this->preco * $this->qtdEstoque;
    }

    public function setPreco(float $valor)
    {
        $this->preco = $valor;
    }

    public function compra(int $quantidade = 1)
    {
        try {
            if ($quantidade < 0) {
                throw new InvalidArgumentException("A quantidade de compra não pode ser negativa!");
            }

            if ($quantidade > $this->qtdEstoque) {
                throw new CompraMaiorQueEstoque($this->qtdEstoque, $quantidade);
            }
        } catch (InvalidArgumentException $erro) {
            echo "Argumento inválido: " . $erro->getMessage() . PHP_EOL;
            return;
        } catch (Exception $erro) {
            echo "Regra de negócio violada: " . $erro->getMessage() . PHP_EOL;
            return;
        }

        $this->qtdEstoque -= $quantidade;
    }

    public function repoe(int $quantidade = 1 )
    {
        try{
            if ($quantidade < 0) {
                throw new InvalidArgumentException("A quantidade de reposição não pode ser negativa!");
            }
        } catch (InvalidArgumentException $erro) {
            echo "Argumento inválido: " . $erro->getMessage() . PHP_EOL;
            return;
        }
        $this->qtdEstoque += $quantidade;
    }




}