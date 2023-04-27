<?php
try {
    include "abrir_transacao.php";
include_once "conecta-mysql.php";

function inserir($cliente) {
    global $pdo;
    $sql = "INSERT INTO clientes (nome, telefone, sexo) " .
            "VALUES (:nome, :fone, :sexo)";
    $pdo->prepare($sql)->execute($cliente);
}

$cliente = [
    "nome" => "Rafael de Souza",
    "fone" => "(61) 98765-5678",
    "sexo" => "M"
];
inserir($cliente);


$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>