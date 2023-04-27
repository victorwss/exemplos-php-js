<?php
include_once "conecta-mysql.php";

function transferir($recebedor, $pagador, $valor) {
    $sqlA = "UPDATE conta SET saldo = saldo + :valor " .
            "WHERE numconta = :recebedor";
    $sqlB = "UPDATE conta SET saldo = saldo - :valor " .
            "WHERE numconta = :pagador";
    $pdo = conectar();
    $ok = false;
    $pdo->beginTransaction();
    try {
        $stmtA = $pdo->prepare($sqlA);
        $stmtA->execute(["valor" => $valor, "recebedor" => $recebedor]);
        $stmtB = $pdo->prepare($sqlB);
        $stmtB->execute(["valor" => $valor, "pagador" => $pagador]);
        $ok = true;
    } finally {
        if ($ok) {
            $pdo->commit();
        } else {
            $pdo->rollback();
        }
    }
}

transferir(1, 2, 50);

?>
