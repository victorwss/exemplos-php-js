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
    "id" => $_POST["idcliente"],
    "nome" => $_POST["nome"],
    "fone" => $_POST["telefone"],
    "sexo" => $_POST["sexo"]
];
alterar($cliente);

header("Location: listar-todos-clientes.php");


$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>