<?php

namespace Willian\Comex\Interfaces;

interface MeioDePagamento
{
    public function processaPagamento(float $valor): bool;
}