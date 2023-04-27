<?php

include_once "conecta-mysql.php";

function inserir_flor($flor) {
    global $pdo;
    $sql = "INSERT INTO flor (cor, especie, local_onde_foi_plantado, numero_folhas) " .
            "VALUES (:cor, :especie, :local, :folhas)";
    $pdo->prepare($sql)->execute($flor);
    return $pdo->lastInsertId();
}

function alterar_flor($flor) {
    global $pdo;
    $sql = "UPDATE flor SET " .
            "cor = :cor, especie = :especie, " .
            "local_onde_foi_plantado = :local, numero_folhas = :folhas " .
            "WHERE pk = :pk";
    $pdo->prepare($sql)->execute($flor);
}

function excluir_flor($pk) {
    global $pdo;
    $sql = "DELETE FROM flor WHERE pk = :pk";
    $pdo->prepare($sql)->execute(["pk" => $pk]);
}

function listar_todas_flores() {
    global $pdo;
    $sql = "SELECT * FROM flor";
    $resultados = [];
    $consulta = $pdo->query($sql);
    while ($linha = $consulta->fetch()) {
        $resultados[] = $linha;
    }
    return $resultados;
}

function buscar_flor($id) {
    global $pdo;
    $sql = "SELECT * FROM flor WHERE pk = :id";
    $resultados = [];
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["id" => $id]);
    return $consulta->fetch();
}