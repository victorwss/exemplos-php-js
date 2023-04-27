<?php

function transferir($recebedor, $pagador, $valor) {
    global $pdo;
    $sqlA = "UPDATE conta SET saldo = saldo + " . $valor .
            " WHERE numconta = " . $recebedor;
    $sqlB = "UPDATE conta SET saldo = saldo - " . $valor .
            " WHERE numconta = " . $pagador;
    $stmtA = $pdo->prepare($sqlA);
    $stmtA->execute([]);
    $stmtB = $pdo->prepare($sqlB);
    $stmtB->execute([]);
}
