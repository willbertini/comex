<?php

//namespace Willian\Comex\Tests;

use Willian\Comex\Classes\Produto;
use PHPUnit\Framework\TestCase;


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
}
