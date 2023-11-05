<?php

namespace Willian\Comex\Classes\Pagamento;
use Willian\Comex\Interfaces\MeioDePagamento;

class Pix implements MeioDePagamento
{
    public function processaPagamento(float $valor): bool
    {
        echo "Procesando pagamento R$ $valor por Pix..." .  PHP_EOL;
        sleep(1);
        echo "Pagamento aprovado" . PHP_EOL;
        return true;
    }
}