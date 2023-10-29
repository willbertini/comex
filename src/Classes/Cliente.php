<?php

namespace Willian\Comex\Classes;

class Cliente
{
   

    public function __construct(
        private string $nome,
        private string $email,
        private int $celular,
        private Endereco $endereco
    )
    {
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function getCelularFormatado()
    {
        return preg_replace("/(\d{2})(\d{1})(\d{4})(\d{4})/", "($1) $2 $3-$4", $this->celular);
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEmail(string $valor)
    {
        $this->email = $valor;
    }

    public function setCelular(int $valor)
    {
        $this->celular = $valor;
    }

    public function setEndereco(Endereco $valor)
    {
        $this->endereco = $valor;
    }

}