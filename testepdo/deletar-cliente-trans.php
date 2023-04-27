<?php
try {
    include "abrir_transacao.php";
include_once "conecta-mysql.php";

function deletar($id) {
    global $pdo;
    $sql = "DELETE FROM clientes WHERE idcliente = :id";
    $pdo->prepare($sql)->execute(["id" => $id]);
}
deletar(5);


$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>