<?php

include_once "conecta-sqlite.php";

function inserir_flor($flor) {
    global $pdo;
    $sql = "INSERT INTO flor (cor, especie, localizacao, folhas, tipo) " .
            "VALUES (:cor, :especie, :localizacao, :folhas, :tipo)";
    $pdo->prepare($sql)->execute($flor);
    return $pdo->lastInsertId();
}

function alterar_flor($flor) {
    global $pdo;
    $sql = "UPDATE flor SET " .
            "cor = :cor, " .
            "especie = :especie, " .
            "localizacao = :localizacao, ".
            "folhas = :folhas, " .
            "tipo = :tipo " .
            "WHERE chave = :chave";
    $pdo->prepare($sql)->execute($flor);
}

function excluir_flor($chave) {
    global $pdo;
    $sql = "DELETE FROM flor WHERE chave = :chave";
    $pdo->prepare($sql)->execute(["chave" => $chave]);
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

function buscar_flor($chave) {
    global $pdo;
    $sql = "SELECT * FROM flor WHERE chave = :chave";
    $resultados = [];
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["chave" => $chave]);
    return $consulta->fetch();
}

function listar_todos_tipos() {
    global $pdo;
    $sql = "SELECT * FROM tipo_flor";
    $resultados = [];
    $consulta = $pdo->query($sql);
    while ($linha = $consulta->fetch()) {
        $resultados[] = $linha["tipo"];
    }
    return $resultados;
}