<?php

namespace Willian\Comex\DAO;
use Willian\Comex\Model;

class EnderecoDAO
{
    public function __construct(
        private \PDO $pdo,
        private int $clienteId
    ){
    }
    public function salvar(int $cep, string $estado, string $cidade, string $bairro, string $rua, string $numero)
    {
        $sql = "INSERT INTO enderecos (cliente_id, cep, estado, cidade, bairro, rua, numero) VALUES (?,?,?,?,?,?,?)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $this->clienteId,
            $cep,
            $estado,
            $cidade,
            $bairro,
            $rua,
            $numero
        ]);
    }


}