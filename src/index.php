<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Willian\Comex\Classes\Cliente;
use Willian\Comex\Classes\Endereco;

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

