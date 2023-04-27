<?php
try {
    include "abrir_transacao.php";
include_once "conecta-mysql.php";

function alterar($cliente) {
    global $pdo;
    $sql = "UPDATE clientes " .
            "SET nome = :nome, " .
            "telefone = :fone, " .
            "sexo = :sexo " .
            "WHERE idcliente = :id";
    $pdo->prepare($sql)->execute($cliente);
}

$cliente = [
    "id" => 14,
    "nome" => "Marcela",
    "fone" => "(71) 99999-5555",
    "sexo" => "F"
];
alterar($cliente);


$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>