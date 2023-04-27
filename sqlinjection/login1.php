<?php

function login($user, $senha) {
    global $pdo;
    $sql = "SELECT nome FROM usuario WHERE login = ? AND senha = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user, $senha]);
    return $stmt->fetch();
}
