<?php

function login($user, $senha) {
    global $pdo;
    $sql = "SELECT nome FROM usuario WHERE login = '" . $user .
           "' AND senha = '" . $senha . "'";
    //echo $sql;
    return $pdo->query($sql)->fetch();
}
