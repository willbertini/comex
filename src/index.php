<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Willian\Comex\Classes\Carrinho;
use Willian\Comex\Classes\Cliente;
use Willian\Comex\Classes\Endereco;
use Willian\Comex\Classes\Produto;
use Willian\Comex\Classes\Pedido;

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

echo "Olá " . $cliente->getNome() . PHP_EOL;
echo "Dados Cadastrados: " . PHP_EOL;
echo "E-mail: " . $cliente->getEmail() . PHP_EOL;
echo "Celular: " . $cliente->getCelularFormatado() . PHP_EOL;
echo "Endereço: " . $cliente->getEndereco()->getEndereco() . PHP_EOL;
echo PHP_EOL;

$produto1 = new Produto(
    'Teclado', 
    29.90,
    100
);

$produto2 = new Produto(
    'Mouse', 
    9.85,
    100
);

$produto3 = new Produto(
    'Monitor', 
    854.90,
    100
);

$produtos = [
    $produto1,
    $produto2,
    $produto3
];

foreach ($produtos as $produto) {
    echo "O produto " . $produto->getNome() . " custa R$" . $produto->getPreco() . PHP_EOL;
}

$produto1->compra(5);
$produto1->repoe(10);

echo "Quantidade em estoque do produto " . $produto1->getNome() . " é de " . $produto1->getQtdEstoque() . PHP_EOL;
echo PHP_EOL;

$pedido = new Pedido(
    1,
    $cliente,
    $produtos
);

$pedido->adicionaProduto($produto1);

$carrinho = new Carrinho(
    [
        $produto1,
        $produto2,
        $produto3,
        $produto1
    ]
);

$carrinho->removerProduto('Teclado');


