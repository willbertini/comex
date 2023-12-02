<?php

use Willian\Comex\DAO\ClienteDAO;

require_once __DIR__ . "/../../vendor/autoload.php";
$pdo = include __DIR__ . "/../Config/pdo.php";

$clienteDao = new ClienteDAO($pdo);

$clienteDao->salvar(
    $_POST['nome'],
    $_POST['email'],
    $_POST['celular'],
    $_POST['cep'],
    $_POST['estado'],
    $_POST['cidade'],
    $_POST['bairro'],
    $_POST['rua'],
    $_POST['numero']
);
