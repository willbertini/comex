<?php

namespace Willian\Comex\Classes;

use Willian\Comex\Interfaces\MeioDePagamento;

class Pedido
{
    public function __construct(
        private int $id,
        private Cliente $cliente,
        private array $produtos,
        private MeioDePagamento $meioDePagamento
    ) {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

    public function getValorTotalPedido()
    {
        $soma = 0;
        foreach ($this->produtos as $produto) {
            $soma += $produto->getPreco();
        }
        return $soma;
    }

    public function pagar(): void
    {
        $this->meioDePagamento->processaPagamento($this->getValorTotalPedido());
    }

    public function adicionaProduto(Produto $produto)
    {
        $this->produtos[] = $produto;
        //outra possibilidade:
        //array_push($this->produtos, $produto);
    }
}