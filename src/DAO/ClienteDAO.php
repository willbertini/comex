<?php

namespace Willian\Comex\DAO;
use Willian\Comex\Model;

class ClienteDAO
{
    public function __construct(
        private \PDO $pdo
    ){

    }
    public function salvar(string $nome, string $email, string $celular)
    {
        $sql = "INSERT INTO clientes (nome, email, celular) VALUES (?,?,?)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $nome,
            $email,
            $celular
        ]);
    }

    public function buscarPoremail(string $email)
    {
        $sql = "SELECT * FROM clientes WHERE email = ?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);

        $dados = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $dados;
    }
}