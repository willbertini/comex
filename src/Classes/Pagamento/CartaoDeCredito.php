<?php

namespace Willian\Comex\Classes\Pagamento;

use Willian\Comex\Exceptions\FalhaComunicacaoServidorException;
use Willian\Comex\Interfaces\MeioDePagamento;

class CartaoDeCredito implements MeioDePagamento
{
    public function processaPagamento(float $valor): bool
    {
        echo "Procesando pagamento R$ $valor por Cartão de Crédito..." .  PHP_EOL;
        sleep(10);

        $situacao = rand(0,1);

        try{
            if ($situacao === 0) {
                throw new FalhaComunicacaoServidorException("Erro ao conectar com o servidor de pagamentos.");
            }
        } catch (\Exception $erro){
            echo "Erro ao processar pagamento: " . $erro->getMessage() . PHP_EOL;
            return false;
        }
        
        echo "Pagamento aprovado" . PHP_EOL;
        return true;
    }
}