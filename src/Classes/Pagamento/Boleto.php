<?php

namespace Willian\Comex\Classes\Pagamento;
use Willian\Comex\Interfaces\MeioDePagamento;

class Boleto implements MeioDePagamento
{
    public function processaPagamento(float $valor): bool
    {
        echo "Procesando pagamento  de R$ $valor por boleto..." .  PHP_EOL;
        sleep(15);
        echo "Pagamento aprovado" . PHP_EOL;
        return true;
    }
}