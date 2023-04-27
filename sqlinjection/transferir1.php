<?php

function transferir($recebedor, $pagador, $valor) {
    global $pdo;
    $sqlA = "UPDATE conta SET saldo = saldo + ? WHERE numconta = ?";
    $sqlB = "UPDATE conta SET saldo = saldo - ? WHERE numconta = ?";
    $stmtA = $pdo->prepare($sqlA);
    $stmtA->execute([$valor, $recebedor]);
    $stmtB = $pdo->prepare($sqlB);
    $stmtB->execute([$valor, $pagador]);
}
