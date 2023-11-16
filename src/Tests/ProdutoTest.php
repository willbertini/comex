<?php

namespace Willian\Comex\Tests;

use Willian\Comex\Classes\Produto;
use PHPUnit\Framework\TestCase;
use Willian\Comex\Exceptions\CompraMaiorQueEstoque;

class ProdutoTest extends TestCase
{
    public function testNomeProduto()
    {
        $produto = new Produto('Lapiseira',20.5,20);
        $this->assertEquals('Lapiseira', $produto->getNome());
    }

    public function testPrecoProduto()
    {
        $produto = new Produto('Lapiseira',20.5,20);
        $this->assertEquals(20.5, $produto->getPreco());
    }
    public function testEstoqueProduto()
    {
        $produto = new Produto('Lapiseira',20.5,20);
        $this->assertEquals(20, $produto->getQtdEstoque());
    }
    public function testValorTotalEstoqueProduto()
    {
        $produto = new Produto('Lapiseira',20.5,20);
        $this->assertEquals(20.5 * 20, $produto->getValorTotalEstoque());
    }

    public function testComprarQuantidadeNegativa()
    {
        $produto = new Produto('Lapiseira',20.5,20);
        $this->expectException(\InvalidArgumentException::class);
        $produto->compra(-1);
    }

    public function testComprarQuantidadeAcimaEstoque()
    {
        $produto = new Produto('Lapiseira',20.5,20);
        $this->expectException(CompraMaiorQueEstoque::class);
        $produto->compra(50);
    }

}
