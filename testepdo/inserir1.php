<?php
include_once "conecta-sqlite.php";

$pdo = conectar();
$dados = ["João Paulo da Silva", "(11) 91234-5678", "M"];
$sql = "INSERT INTO clientes (nome, telefone, sexo) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute($dados);
?>
Oi. Deu certo?