<?php
include_once "conecta-sqlite.php";
$pdo = conectar();
$transacaoOk = false;
$pdo->beginTransaction();
