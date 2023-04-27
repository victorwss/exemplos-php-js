<?php
try {
    include "abrir_transacao.php";
include_once "conecta-mysql.php";

function inserir($cliente) {
    global $pdo;
    $sql = "INSERT INTO clientes (nome, telefone, sexo) " .
            "VALUES (:nome, :fone, :sexo)";
    $pdo->prepare($sql)->execute($cliente);
    return $pdo->lastInsertId();
}

$cliente = [
    "nome" => $_POST["nome"],
    "fone" => $_POST["telefone"],
    "sexo" => $_POST["sexo"]
];
$id = inserir($cliente);

header("Location: buscar-cliente.php?idcliente=" . $id);

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>