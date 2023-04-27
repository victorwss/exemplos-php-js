<?php
include_once "conecta-sqlite.php";

$pdo = conectar();

$sql = "SELECT * FROM clientes";
$q = $pdo->query($sql);
while ($linha = $q->fetch()) {
    foreach ($linha as $k) {
        echo $k;
    }
}
?>