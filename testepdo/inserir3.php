<?php
include_once "conecta-mysql.php";

$dados = [
  ["nome" => "Rômulo Fávaro", "fone" => "(21) 97777-8888", "sexo" => "M"],
  ["nome" => "Matilde Lemos", "fone" => "(71) 98888-7777", "sexo" => "F"],
  ["nome" => "Cris Souza"   , "fone" => "(81) 99999-1111", "sexo" => "F"],
  ["nome" => "Marcos Silva" , "fone" => "(88) 94949-4949", "sexo" => "M"]
];

$pdo = conectar();
$sql = "INSERT INTO clientes (nome, telefone, sexo) " .
       "VALUES (:nome, :fone, :sexo)";
$stmt = $pdo->prepare($sql);
foreach ($dados as $linha) {
    $stmt->execute($linha);
}
?>
