<?php

namespace Willian\Comex\Tests;
use PHPUnit\Framework\TestCase;
use Willian\Comex\Classes\Cliente;
use Willian\Comex\Classes\Endereco;
use Willian\Comex\Classes\Pagamento\Pix;
use Willian\Comex\Classes\Pedido;
use Willian\Comex\Classes\Produto;

class ClienteTest extends TestCase
{
    public function testNomeCliente()
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
        $this->assertEquals('Maria da Silva', $cliente->getNome());
    }

    public function testRetornaCelularFormatado()
    {
        $cliente = new Cliente(
            'Maria da Silva',
            'mariasilva@gmail.com',
            19998874555, new Endereco(
                14585555,
                'SP',
                'Piracicaba',
                'Centro',
                "Rua Arthur Ribeiro",
                852
                ),
            );
        $this->assertEquals("(19) 9 9887-4555", $cliente->getCelularFormatado());
    }

    public function testAdicionaPedido()
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
                new Produto('Um',1,1)
            ],
            new Pix()
        );

        $cliente->setAdicionaPedido($pedido);
        $this->assertEquals(1, count($cliente->getPedidos()));

    }


}