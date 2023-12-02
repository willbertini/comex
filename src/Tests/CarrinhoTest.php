<?php

namespace Willian\Comex\Tests;
use PHPUnit\Framework\TestCase;
use Willian\Comex\Classes\Carrinho;
use Willian\Comex\Classes\Produto;

class CarrinhoTest extends TestCase
{
    public function testAdicionaProdutoAumentaLista()
    {
        $carrinho = new Carrinho([]);
        $carrinho->adicionarProduto(new Produto('Um',1,1));
        $this->assertEquals(1, count($carrinho->getProdutos()));
    }

    public function testRemoveProdutoDiminuiLista()
    {
        $carrinho = new Carrinho([new Produto('Um',1,1)]);
        $carrinho->removerProduto('Um');
        $this->assertEquals(0, count($carrinho->getProdutos()));
    }

    public function testeRetornaValorTotalProdutos()
    {
        $carrinho = new Carrinho([new Produto('Um',1,1),new Produto('Dois',1,1)]);
        $this->assertEquals(1*1, $carrinho->getValorTotal());
    }
}