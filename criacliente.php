<?php
/*Criar um cliente
Crie um cliente com dados básicos
Para praticar a criação de arrays.
Crie um array que conterá os dados básicos do cliente, como nome, e-mail, número de celular e endereço.*/

$listaClientes = [
   '0' => [
   'nome' => 'Cristina da Silva',
   'email' => 'cristina@gmail.com',
   'celular' => '(11)98521-7845',
   'endereco' => 'Rua Antonio Silveira, 585 - Jd. Planalto - São Paulo-SP'
   ],
   '1' => [
   'nome' => 'Paulo Cesar',
   'email' => 'paulocesar@gmail.com',
   'celular' => '(11)97521-8488',
   'endereco' => 'Rua Silva Jardim, 85 - Bairro Alto - São Paulo-SP'
   ],
   '2' => [
   'nome' => 'Fernado Guerra',
   'email' => 'fernandoguerra@gmail.com',
   'celular' => '(11)99423-6587',
   'endereco' => 'Rua Cristiano Cleopat, 75 - Centro - São Paulo-SP'
   ]
];

foreach ($listaClientes as $clientes) {
    echo $clientes['nome'] . PHP_EOL;
 };