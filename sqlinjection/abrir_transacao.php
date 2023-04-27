<?php
include_once "conecta-mysql.php";
$pdo = conectar();
$transacaoOk = false;
$pdo->beginTransaction();
