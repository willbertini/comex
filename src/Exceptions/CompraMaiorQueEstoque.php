<?php

namespace Willian\Comex\Exceptions;

use Exception;
class CompraMaiorQueEstoque extends Exception
{
    public function __construct(int $qtdEstoque, int $qtdCompra)
    {
        parent::__construct("A quantidade de compra ($qtdCompra) não pode ser superior ao número de itens em estoque ($qtdEstoque).");
    }
}