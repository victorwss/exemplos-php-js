<?php
try {
    include "abrir_transacao.php";
include_once "conecta-mysql.php";

function excluir($id) {
    global $pdo;
    $sql = "DELETE FROM clientes WHERE idcliente = :id";
    $pdo->prepare($sql)->execute(["id" => $id]);
}

excluir($_POST["idcliente"]);

header("Location: listar-todos-clientes.php");

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>