<?php
include_once "conecta-mysql.php";

class ClienteNaoExisteException extends Exception {
    public function __construct(
            $mensagem,
            $codigo = 0,
            Throwable $anterior = null)
    {
        parent::__construct($mensagem, $codigo, $anterior);
    }
}

function alterarCliente($cliente) {
    if (!isset($cliente["id"])) throw new InvalidArgumentException("Faltou o id.");
    if ($cliente["id"] < 0) throw new ClienteNaoExisteException("Não existe cliente com esse id.");
    $pdo = conectar();
    $sql = "UPDATE clientes " .
            "SET nome = :nome, " .
            "telefone = :fone, " .
            "sexo = :sexo " .
            "WHERE idcliente = :id";
    $pdo->prepare($sql)->execute($cliente);
    return $cliente["id"];
}
?>
