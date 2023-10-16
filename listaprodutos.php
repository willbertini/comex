<?php
/*Criar uma lista de produtos
Para praticar a criação de arrays e uso de loops.
Crie uma lista que contenha vários produtos, os quais devem ter nome e preço.
Após, exiba-os.*/

$listaProdutos = [
    '0' => [
   'nome' => 'Notebook Gamer Lenovo',
   'preco' => 3849
    ],
   '1' => [
   'nome' => 'Console Sony PlayStation 5',
   'preco' => 3905
   ],
   '2' => [
   'nome' => 'Processador AMD Ryzen 7 5700x',
   'preco' => 1249
   ],
   '3' => [
   'nome' => 'Headset Sem Fio HyperX',
   'preco' => 390
   ]
];

foreach ($listaProdutos as /*$cpf =>*/ $produtos) {
    echo /*$cpf . " " .*/ $produtos['nome'] . " - " . $produtos['preco'] . PHP_EOL;
}