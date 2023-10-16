<?php
/*Gerenciar o estoque
Tarefa: Criar funções/variáveis para gerenciar o estoque
Para praticar o uso de arrays, variáveis, funções e treinar lógica.

Reescreva a lista de produtos, mas agora ela deve conter o estoque de produtos do e-commerce. 
O array deve ter os produtos com nome, preço e quantidade em estoque. 
Implemente funções para adicionar produtos ao estoque, remover produtos do estoque 
e verificar a disponibilidade de um produto específico.*/

$listaProdutos = [
   '0' => [
   'nome' => 'Notebook Gamer Lenovo',
   'preco' => 3849,
   'qtdEstoque' => 100
    ],
   '1' => [
   'nome' => 'Console Sony PlayStation 5',
   'preco' => 3905,
   'qtdEstoque' => 100
   ],
   '2' => [
   'nome' => 'Processador AMD Ryzen 7 5700x',
   'preco' => 1249,
   'qtdEstoque' => 100
   ],
   '3' => [
   'nome' => 'Headset Sem Fio HyperX',
   'preco' => 390,
   'qtdEstoque' => 100
   ]
];

//Função que verifica o estoque de determinado item
function verificaEstoque(array &$lista, $codigo)
{
    echo "O estoque do item " . $lista[$codigo]['nome'] . " é: " . $lista[$codigo]['qtdEstoque'] . PHP_EOL;
    return $lista[$codigo]['qtdEstoque'];
}
verificaEstoque($listaProdutos,1);

//Função que exibe todos os produtos cadastrados
function exibeProdutos(array $listaProdutos)
{
    foreach ($listaProdutos as $codigo => $produtos) {
        echo "Código: " . $codigo . " - Nome: " . $produtos['nome'] . " - Preço: " . $produtos['preco'] . 
        " - Quantidade Estoque: " . $produtos['qtdEstoque'] . PHP_EOL;
    }
}
exibeProdutos($listaProdutos);

//Função para adicionar um novo produto 
function adicionaNovoProduto(array $produtos, $nome, $preco): array
{
    $produtos[] = [
        'nome' => $nome,
        'preco' => $preco,
        'qtdEstoque' => '1'
    ];
    return $produtos;
}

$listaProdutos = adicionaNovoProduto($listaProdutos,'Placa de vídeo RTX 8GB',2200);
exibeProdutos($listaProdutos);

//Função para adicionar/incrementar estoque
function adicionaEstoque (array &$produtos, $codigo, $quantidade)
{
    $produtos[$codigo]['qtdEstoque'] += $quantidade;
    verificaEstoque($produtos,$codigo);
}
adicionaEstoque($listaProdutos,0,20);


//Função para remover/diminuir estoque
function removeEstoque (array &$produtos, $codigo, $quantidade)
{
    if ($produtos[$codigo]['qtdEstoque'] >= $quantidade) {
    $produtos[$codigo]['qtdEstoque'] -= $quantidade;
    }
    else echo "A quantidade a ser diminuída é inferior ao estoque disponível: " . $produtos[$codigo]['qtdEstoque'] . PHP_EOL;
    verificaEstoque($produtos,$codigo);
}
removeEstoque($listaProdutos,0,10);




$maior = uasort($listaProdutos, function ($a, $b) { 
    return $b['preco'] <=> $a['preco'];
    });
echo $b;