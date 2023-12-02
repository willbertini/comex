<?php

namespace Willian\Comex\Tests;

use PHPUnit\Framework\TestCase;
use Willian\Comex\Classes\Pagamento\Pix;
use Willian\Comex\Classes\Pedido;
use Willian\Comex\Classes\Cliente;
use Willian\Comex\Classes\Endereco;
use Willian\Comex\Classes\Produto;

class PedidoTest extends TestCase
{
    public function testRetornaId()
    {
        $cliente = new Cliente(
            'Maria da Silva',
            'mariasilva@gmail.com',
            998874555, new Endereco(
                14585555,
                'SP',
                'Piracicaba',
                'Centro',
                "Rua Arthur Ribeiro",
                852
                ),
            );
        $pedido = new Pedido(
            1,
            $cliente,
            [
                new Produto('Um',1,1),
                new Produto('Dois',1,1),
                new Produto('Três',1,1),
                new Produto('Quatro',1,1),
                new Produto('Cinco',1,1)
            ],
            new Pix()
        );
        $this->assertEquals(1, $pedido->getId());
    }

    public function testRetornaCliente()
    {
        $cliente = new Cliente(
            'Maria da Silva',
            'mariasilva@gmail.com',
            998874555, new Endereco(
                14585555,
                'SP',
                'Piracicaba',
                'Centro',
                "Rua Arthur Ribeiro",
                852
                ),
            );
        $pedido = new Pedido(
            1,
            $cliente,
            [
                new Produto('Um',1,1),
                new Produto('Dois',1,1),
                new Produto('Três',1,1),
                new Produto('Quatro',1,1),
                new Produto('Cinco',1,1)
            ],
            new Pix()
        );
        $this->assertEquals($cliente, $pedido->getCliente());
    }

    public function testRetornaProdutos()
    {
        $cliente = new Cliente(
            'Maria da Silva',
            'mariasilva@gmail.com',
            998874555, new Endereco(
                14585555,
                'SP',
                'Piracicaba',
                'Centro',
                "Rua Arthur Ribeiro",
                852
                ),
            );
        $pedido = new Pedido(
            1,
            $cliente,
            [
                new Produto('Um',1,1),
                new Produto('Dois',1,1),
                new Produto('Três',1,1),
                new Produto('Quatro',1,1),
                new Produto('Cinco',1,1)
            ],
            new Pix()
        );
        $this->assertEquals(5, count($pedido->getProdutos()));
    }

    public function testValorTotalPedido()
    {
        $cliente = new Cliente(
            'Maria da Silva',
            'mariasilva@gmail.com',
            998874555, new Endereco(
                14585555,
                'SP',
                'Piracicaba',
                'Centro',
                "Rua Arthur Ribeiro",
                852
                ),
            );
        $pedido = new Pedido(
            1,
            $cliente,
            [
                new Produto('Um',1,1),
                new Produto('Dois',1,1),
                new Produto('Três',1,1),
                new Produto('Quatro',1,1),
                new Produto('Cinco',1,1)
            ],
            new Pix()
        );
        $this->assertEquals(1*5,($pedido->getValorTotalPedido()));
    } 

    public function testAdicionarProduto()
    {
        $cliente = new Cliente(
            'Maria da Silva',
            'mariasilva@gmail.com',
            998874555, new Endereco(
                14585555,
                'SP',
                'Piracicaba',
                'Centro',
                "Rua Arthur Ribeiro",
                852
                ),
            );
        $pedido = new Pedido(
            1,
            $cliente,
            [
                new Produto('Um',1,1),
                new Produto('Dois',1,1),
                new Produto('Três',1,1),
                new Produto('Quatro',1,1),
                new Produto('Cinco',1,1)
            ],
            new Pix()
        );
        $pedido->adicionaProduto(new Produto('Seis',1,1));
        $this->assertEquals(6,($pedido->getProdutos()));
    } 

}