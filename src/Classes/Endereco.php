<?php

namespace Willian\Comex\Classes;

class Endereco
{
    public function __construct(
        private int $cep,
        private string $estado,
        private string $cidade,
        private string $bairro,
        private string $rua,
        private string $numero
    )
    {

    }
    public function getEndereco()
    {
        return $this->estado . ", " . $this->cep . ", " . $this->cidade .", ". $this->bairro .", ". 
        $this->rua .", ". $this->numero;
    }

}