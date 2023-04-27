<?php
include_once "conecta-mysql.php";

$dados = [
    ["José Paulo da Silva"  , "(11) 91234-5679", "M"],
    ["Maria Mendes Fontoura", "(44) 94444-4444", "F"],
    ["Junior Marcondes"     , "(55) 93333-5555", "M"],
    ["Caroline Medeiros"    , "(19) 94989-9898", "F"]
];

$pdo = conectar();
$sql = "INSERT INTO clientes (nome, telefone, sexo) " .
       "VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
foreach ($dados as $linha) {
    $stmt->execute($linha);
}
?>
