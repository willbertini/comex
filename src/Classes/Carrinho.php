<?php

namespace Willian\Comex\Classes;

class Carrinho
{
    public function __construct(
        private array $produtos
    ){
    }

    public function adicionarProduto(Produto $produto)
    {
        $this->produtos[] = $produto;
    }

    public function removerProduto(string $produto)
    {
        foreach ($this->produtos as $key => $item) {
            if ($item->getNome() === $produto) {
                array_splice($this->produtos, $key,1);
                echo "Produto removido: ". $item->getNome() . PHP_EOL;
                break;
            }
        }
    }

    public function getProdutos()
    {
        return $this->produtos;
    }
    public function getValorTotal()
    {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total;
    }

    public function calculaDesconto(): float
    {
        $valor = $this->getValorTotal();
        return $valor >=100 ? $valor * 0.9 : $valor;
    }

    public function calculaFrete()
    {
        return $this->getValorTotal() > 100 ? 0 : 9.99;
    }

}