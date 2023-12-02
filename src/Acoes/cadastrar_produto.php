<?php

use Willian\Comex\DAO\ProdutoDAO;

require_once __DIR__ . "/../../vendor/autoload.php";
$pdo = include __DIR__ . "/../Config/pdo.php";

$ProdutoDao = new ProdutoDAO($pdo);

$ProdutoDao->salvar(
    $_POST['nome'],
    $_POST['preco'],
    $_POST['qtd_estoque'],
);
