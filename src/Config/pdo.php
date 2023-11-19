<?php

$caminho = __DIR__ . "/../../db.sqlite";
$pdo = new PDO('sqlite:' . '');

$sql = "CREATE TABLE IF NOT EXISTS clientes (
    id INTEGER PRIMARY KEY,
    nome TEXT,
    email TEXT,
    celular TEXT,
    );";

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS enderecos (
    id INTEGER PRIMARY KEY,
    cliente_id INTEGER,
    cep TEXT,
    estado TEXT,
    cidade TEXT,
    bairro TEXT,
    rua TEXT,
    numero TEXT

    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
    );";

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INTEGER PRIMARY KEY,
    nome TEXT,
    preco FLOAT,
    qtd_estoque INTEGER
    );";

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS pedidos (
    id INTEGER PRIMARY KEY,

    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
    );";

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS itens_do_pedido (
    id INTEGER PRIMARY KEY,
    pedido_id INTEGER,
    produto_id INTEGER,

    FOREIGN KEY (pedido_id) REFERENCES pedidos(id),
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
    );";

$pdo->exec($sql);

return $pdo;