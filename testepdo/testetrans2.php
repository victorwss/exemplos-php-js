<?php
try {
    include "abrir_transacao.php";

function transferir($recebedor, $pagador, $valor) {
    global $pdo;
    $sqlA = "UPDATE conta SET saldo = saldo + :valor " .
            "WHERE numconta = :recebedor";
    $sqlB = "UPDATE conta SET saldo = saldo - :valor " .
            "WHERE numconta = :pagador";
    $stmtA = $pdo->prepare($sqlA);
    $stmtA->execute(["valor" => $valor, "recebedor" => $recebedor]);
    $stmtB = $pdo->prepare($sqlB);
    $stmtB->execute(["valor" => $valor, "pagador" => $pagador]);
}

transferir(2, 1, 50);
$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>