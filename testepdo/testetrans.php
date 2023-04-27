<?php
include_once "conecta-mysql.php";

function inserir($cliente) {
    $pdo = conectar();
    $ok = false;
    $pdo->beginTransaction();
    try {
        $sql = "INSERT INTO clientes (nome, telefone, sexo) " .
               "VALUES (:nome, :fone, :sexo)";
        $pdo->prepare($sql)->execute($cliente);
        $ok = true;
    } finally {
        if ($ok) {
            $pdo->commit();
        } else {
            $pdo->rollback();
        }
    }
}

inserir(["nome" => "Juliana", "fone" => "(11) 94444-8888", "sexo" => "F"]);

?>
