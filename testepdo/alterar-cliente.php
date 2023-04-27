<?php
include_once "conecta-mysql.php";

function alterar($cliente) {
    $pdo = conectar();
    $sql = "UPDATE clientes " .
            "SET nome = :nome, " .
            "telefone = :fone, " .
            "sexo = :sexo " .
            "WHERE idcliente = :id";
    $pdo->prepare($sql)->execute($cliente);
}
?>
