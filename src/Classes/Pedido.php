<?php

namespace Willian\Comex\Classes;

class Pedido
{
    public function __construct(
        private int $id,
        private Cliente $cliente,
        private array $produtos
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

    public function adicionaProduto(Produto $produto)
    {
        $this->produtos[] = $produto;
        //outra possibilidade:
        //array_push($this->produtos, $produto);
    }
}