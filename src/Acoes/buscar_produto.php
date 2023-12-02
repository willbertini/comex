<?php

use Willian\Comex\DAO\ProdutoDAO;

require_once __DIR__ . "/../../vendor/autoload.php";
$pdo = include __DIR__ . "/../Config/pdo.php";

$produtoDao = new ProdutoDAO($pdo);

$produto = $produtoDao->buscarPorNome($_GET['nome']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Comex - <?php echo $produto->getNome(); ?> </title>
</head>

<body>
    <h1>Dados do Produto <?php echo $produto->getNome(); ?></h1>
    <ul>
        <li>Nome: <?php echo $produto->getNome(); ?></li>
        <li>Preço: <?php echo $produto->getPreco(); ?></li>
        <li>Quantidade: <?php echo $produto->getQtdEstoque(); ?></li>
    </ul>
</body>

</html>