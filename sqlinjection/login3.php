<?php

function login($user, $senha) {
    global $pdo;
    $sql = "SELECT nome FROM usuario WHERE login = '1' AND senha = '2'";
    $sql = str_replace("1", $user, $sql);
    $sql = str_replace("2", $senha, $sql);
    echo $sql;
    return $pdo->query($sql)->fetch();
}
