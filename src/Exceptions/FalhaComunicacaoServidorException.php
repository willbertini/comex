<?php

namespace Willian\Comex\Exceptions;

use Exception;
class FalhaComunicacaoServidorException extends Exception
{
    public function __construct(string $nomeServidor)
    {
        parent::__construct("Erro ao conectar com o servidor: $nomeServidor");
    }
}