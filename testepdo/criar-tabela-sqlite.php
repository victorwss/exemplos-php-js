<?php
include_once "conecta-sqlite.php";

$pdo = conectar();

$sql = "" .
        "CREATE TABLE clientes (" .
        "    idcliente INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT," .
        "    nome TEXT NOT NULL," .
        "    telefone TEXT NOT NULL," .
        "    sexo TEXT NOT NULL" .
        ");";

$stmt = $pdo->prepare($sql);
$stmt->execute([]);
?>
Oi. Deu certo?

CREATE TABLE clientes (
    idcliente INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome TEXT NOT NULL,
    telefone TEXT NOT NULL,
    sexo TEXT NOT NULL
);