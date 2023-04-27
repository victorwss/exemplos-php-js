<?php
include_once "conecta-mysql.php";

function inserir($cliente) {
    $pdo = conectar();
    $sql = "INSERT INTO clientes (nome, telefone, sexo) " .
           "VALUES (:nome, :fone, :sexo)";
    $pdo->prepare($sql)->execute($cliente);
}
?>
